<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
use DB;
use App\User;
use App\Matricula;

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
        $this->user_id = (string)$this->user_name['0']->id;
        $matriculas = User::find($this->user_id)->user_matriculados()->orderBy('id', 'DESC')->paginate(10);

        return view('pdf.index2',compact('matriculas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
            $matriculas = Matricula::find($id)->sesiones()->orderBy('id', 'DESC')->paginate(10);
            $plantillahtml = $matriculas['0']->plantilla->plantillahtml;


            $usuarios = Matricula::find($id)->usuarios()->orderBy('id', 'DESC')->paginate(10);
            $remplazar = $usuarios['0']->name." ".$usuarios['0']->usuarioapellido;
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("nombre_usuario", $remplazar, $plantillahtml);




            $usuarios = Matricula::find($id)->sesiones()->orderBy('id', 'DESC')->paginate(10);
            $remplazar = $usuarios['0']->curso->cursonombre;
            $remplazar = strtoupper($remplazar);
            $plantillahtml = str_replace("curso_nombre", $remplazar, $plantillahtml);

            
            // instantiate and use the dompdf class
            //$option = new Options();
            //$option->setIsRemoteEnabled(true);
            $dompdf = new Dompdf();
            $dompdf->loadHtml($plantillahtml);
            //$dompdf->loadHtml($matriculas['0']->plantilla->plantillahtml);
            //$dompdf->loadHtml('hola');

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream();
        }


        //return view('pdf.pdfview');
    }
}
