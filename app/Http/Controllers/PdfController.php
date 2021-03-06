<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Dompdf\Dompdf;
//use Dompdf\Options;
//use PDF;
use DB;
use App\User;
use App\Matricula;

//require_once dirname(__FILE__).'/../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class PdfController extends Controller
{
    
    private $user_name = NULL;
    private $user_id = NULL;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$users = User::all();
        return view('pdf.index',compact('users'));

        //$cursos = Curso::Search($request->cursonombre)->orderBy('id', 'ASC')->paginate(10);
        //return view('pdf.index',compact('cursos'))
            //->with('i', (request()->input('page', 1) - 1) * 10); //5)
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        request()->validate([
            'usuarionumerodocumento' => 'required',
        ]);

        $this->user_name = DB::table('users')->where('usuarionumerodocumento', "$request->usuarionumerodocumento")->select('id')->get();
        if (!empty($this->user_name['0'])) {
            //dd($this->user_name['0']);
            $this->user_id = (string)$this->user_name['0']->id;
            $matriculas = User::find($this->user_id)->user_matriculados()->orderBy('id', 'DESC')->paginate(10);
            if(!empty($matriculas)){

                return view('pdf.index2',compact('matriculas'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
            }
        }
        
        return redirect()->route('pdf-index');
        // return view('pdf.index2',compact('matriculas'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request, $matricula_id)
    {
        
            # code...
             $id = $matricula_id;
            //$id = '1';
            //$matriculas = User::find($id)->user_matriculados();

        
        if($request->has('download')){

            //$pdf = PDF::loadView('pdfview');
            //$pdf->setPaper('A4', 'landscape');
            //return $pdf->download('pdfview.pdf');
            
            //$pdf = PDF::loadView('pdf.pdfview', compact('matriculas', 'id'));
            //$pdf->setPaper('A4', 'landscape');
            //return $pdf->download('nombre_matricula.pdf');
            //$html=str_replace("{nombre}",$usuario->nombre,$html);
            //
            $matriculas = Matricula::find($id);
            if (!empty($matriculas))
            {
            $matriculas = $matriculas['matriculadescargas'] + 1;
            $validate = [
                'matriculadescargas' => "$matriculas"
            ];
            //Matricula::find($id)->update($validate);

            $matriculas = Matricula::find($id)->sesiones()->orderBy('id', 'DESC')->paginate(10);
            $plantillahtml = $matriculas['0']->plantilla->plantillahtml;


            $usuarios = Matricula::find($id)->usuarios()->orderBy('id', 'DESC')->paginate(10);
            $remplazar = $usuarios['0']->name." ".$usuarios['0']->usuarioapellido;
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("nombre_usuario", $remplazar, $plantillahtml);


            $usuarios = Matricula::find($id)->sesiones()->orderBy('id', 'DESC')->paginate(10);
            $date_inicio = $usuarios['0']->sesionfechainicio;
            $date_final = $usuarios['0']->sesionfechafinal;

            $remplazar = $usuarios['0']->curso->cursonombre;
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("curso_nombre", $remplazar, $plantillahtml);

            $remplazar = $usuarios['0']->curso->cursonumerohoras;
            $plantillahtml = str_replace("numero_horas", $remplazar, $plantillahtml);


            $usuarios = Matricula::find($id)->rol()->orderBy('id', 'DESC')->paginate(10);
            $remplazar = $usuarios['0']->rolnombre;
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("rol_nombre", $remplazar, $plantillahtml);


            //$date_inicio = "2018.01.17";
            //$date_final = "2018.01.17";
            ////$remplazar1 = date('\i\t \i\s \t\h\e jS \d\a\y.');
            //$remplazar = $remplazar1['year'].$remplazar1['month'].$remplazar1['day'];
            
    
            //$remplazar1 = date_parse_from_format('Y.n.j', $date_inicio);
            //$remplazar = $remplazar1['day']." del ".$remplazar1['month'];

            // $date = date_create($date_inicio);
            // $remplazar = date_format($date, 'l jS F');

            setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            $remplazar = iconv('ISO-8859-2', 'UTF-8', strftime("%d de %B", strtotime( $date_inicio ))); //"%A, %d de %B de %Y". A: dia(jueves) d: dia(18) B: mes(enero) Y: año(2018)
            //$remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("fecha_inicio", $remplazar, $plantillahtml);
            //$remplazar = $remplazar1['month'];
            //$remplazar = strtoupper($remplazar);
            //$plantillahtml = str_replace("mes_sesion_inicio", $remplazar, $plantillahtml);


            //$remplazar1 = date_parse_from_format("Y.n.j", $date_final);
            //$remplazar = $remplazar1['day']." del ".$remplazar1['month'];
            //$date = date_create($date_final);
            //$remplazar = date_format($date, 'l jS F');
            //$remplazar = SpanishDate($date_final);
            setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            $remplazar = iconv('ISO-8859-2', 'UTF-8', strftime("%d de %B", strtotime( $date_final )));
            $plantillahtml = str_replace("fecha_final", $remplazar, $plantillahtml);


            $remplazar1 = date_parse_from_format("Y.n.j", $date_final);
            $remplazar = $remplazar1['year'];
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("ano_sesion", $remplazar, $plantillahtml);
            
            
            /**
             * initial use Html2Pdf
             */
             try {
                //$html2pdf->setTestIsImage(false);
                //$html2pdf->setFallbackImage($imageFilename);

                //ob_start();
                //include dirname(__FILE__).'/res/exemple02.php';
                $content = ob_get_clean();
                $content = $plantillahtml;
                //$html2pdf = new Html2Pdf('L', 'LETTER', 'es', true, 'UTF-8', array(15, 5, 15, 5));
                $html2pdf = new Html2Pdf('L', 'LETTER', 'es');
                $html2pdf->pdf->SetDisplayMode('fullpage');
                $html2pdf->setTestIsImage(false);
                //$html2pdf->setFallbackImage($imageFilename);
                //dd($html2pdf);
                $html2pdf->writeHTML($content);
                //$html2pdf->output('exemple02.pdf');
                //
                $usuarios = Matricula::find($id)->usuarios()->orderBy('id', 'DESC')->paginate(10);
                $remplazar = $usuarios['0']->name." ".$usuarios['0']->usuarioapellido;
                $html2pdf->output("Certificado-$remplazar.pdf");

                // $html2pdf = new Html2Pdf('P', 'A4', 'en');
                // //dd($html2pdf);
                // $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first page');
                // //dd($html2pdf);
                // $html2pdf->pdf->SetDisplayMode('fullpage');
                // $html2pdf->output('exemple01.pdf');

                } catch (Html2PdfException $e) {
                    $html2pdf->clean();
                    $formatter = new ExceptionFormatter($e);
                    echo $formatter->getHtmlMessage();
                }
            /**
             * end Html2Pdf
             */
            }else{
                return redirect('pdf-index');
            }
        }


        //return view('pdf.pdfview');
    }

                        
}
