<?php

namespace App\Http\Controllers;

use App\Plantilla;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$cursos = Curso::latest()->paginate(5);
        $plantillas = Plantilla::Search($request->plantillanombre)->orderBy('id', 'ASC')->paginate(10);
        return view('plantillas.layouts.index',compact('plantillas'))
            ->with('i', (request()->input('page', 1) - 1) * 10); //5)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plantillas.layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'plantillanombre' => 'required',
            'plantillahtml' => 'required',
            'plantillacss' => 'required',
            'plantilladescripcion' => 'required',
            'plantillaorientacion' => 'required',
            'plantillaformato' => 'required',
        ]);
        Plantilla::create($request->all());
        return redirect()->route('plantillas.layouts.index')
                        ->with('success','Curso created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //codigo modificado para mandar detalles de la lista del curso
         $sesiones = Plantilla::find($id)->sesiones_de_plantilla;
         //fin
        $plantilla = Plantilla::find($id);
        return view('plantillas.layouts.show',compact('plantilla','sesiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plantilla = Plantilla::find($id);
        return view('plantillas.layouts.edit',compact('plantilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'plantillanombre' => 'required',
            'plantillahtml' => 'required',
            'plantillacss' => 'required',
            'plantilladescripcion' => 'required',
            'plantillaorientacion' => 'required',
            'plantillaformato' => 'required',
        ]);
        Plantilla::find($id)->update($request->all());
        return redirect()->route('plantillas.layouts.index')
                        ->with('success','Curso updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plantilla::find($id)->delete();
        return redirect()->route('plantillas.layouts.index')
                        ->with('success','Curso deleted successfully');
    }

}
