<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Curso;

class PdfController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cursos = Curso::all();
        return view('pdf.index',compact('cursos'));

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
        //$cursos = Curso::all();
        //return view('pdf.pdfview',compact('cursos'));
        request()->validate([
            'cursonombre' => 'required',
            //'cursodescripcion' => 'required',
            //'cursonumerohoras' => 'required',
        ]);

        $cursos = Curso::Search($request->cursonombre)->orderBy('id', 'ASC')->paginate(10);
        return view('pdf.index2',compact('cursos'))
            ->with('i', (request()->input('page', 1) - 1) * 10); //5)
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        //$cursos = DB::table("cursos")->get();
        //view()->share('cursos',$cursos);

        //$cursos = Curso::all();
        //return view('pdf.pdfview',compact('cursos'));


        if($request->has('download')){

            //$pdf = PDF::loadView('pdfview');
            //$pdf->setPaper('A4', 'landscape');
            //return $pdf->download('pdfview.pdf');

            $cursos = Curso::all(); 
            $pdf = PDF::loadView('pdf.pdfview', compact('cursos'));
            return $pdf->download('pdfview.pdf');
        }


        return view('pdf.pdfview');
    }
}
