<?php

namespace App\Http\Controllers;

use App\Sesion;

use Illuminate\Http\Request;

class SesionController extends Controller
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
        $sesiones = Sesion::Search($request->sesionfecha)->orderBy('id', 'ASC')->paginate(10);
        return view('sesiones.layouts.index',compact('sesiones'))
            ->with('i', (request()->input('page', 1) - 1) * 2); //5)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sesiones.layouts.create');
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
            'sesionfechainicio' => 'required',
            'sesionfechafinal' => 'required',
            'curso_id' => 'required',
        ]);
        Sesion::create($request->all());
        return redirect()->route('sesiones.layouts.index')
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
        //$cursos = Sesion::find($id)->curso;
        //fin
        $sesiones = Sesion::find($id);
        return view('sesiones.layouts.show',compact('sesiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sesiones = Sesion::find($id);
        return view('sesiones.layouts.edit',compact('sesiones'));
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
            'sesionfechainicio' => 'required',
            'sesionfechafinal' => 'required',
            'curso_id' => 'required',
        ]);
        Sesiones::find($id)->update($request->all());
        return redirect()->route('sesiones.layouts.index')
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
        Sesion::find($id)->delete();
        return redirect()->route('sesiones.layouts.index')
                        ->with('success','Curso deleted successfully');
    }
}
