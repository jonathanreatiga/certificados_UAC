<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Sesion;
use App\Role;
use App\Estado;

use Illuminate\Http\Request;

class MatriculaController extends Controller
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
        $matriculas = Matricula::Search($request->id_matricula)->orderBy('id', 'ASC')->paginate(10);
        return view('matriculas.layouts.index',compact('matriculas'))
            ->with('i', (request()->input('page', 1) - 1) * 10); //5)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sesiones = Sesion::pluck('sesionfechainicio', 'id');
        $roles = Role::pluck('rolnombre', 'id');
        $estados = Estado::pluck('estadonombre', 'id');
        return view('matriculas.layouts.create',compact('sesiones','roles','estados'));
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
            'matriculadescargas' => '',
            'sesiones_id' => 'required',
            'rol_id' => 'required',
            'estados_id' => 'required', //'plantilla_id' => '', para no ser requerido
        ]);
        Matricula::create($request->all());
        return redirect()->route('matriculas.layouts.index')
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
         //codigo modificado para mandar detalles de la lista de Matriculas
         //$matriculas = Sesion::find($id)->matriculas_de_sesion;
         //fin
        $matriculas = Matricula::find($id);
        return view('matriculas.layouts.show',compact('matriculas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matriculas = Matricula::find($id);
        $sesiones = Sesion::pluck('sesionfechainicio', 'id');
        $roles = Role::pluck('rolnombre', 'id');
        $estados = Estado::pluck('estadonombre', 'id');
        return view('matriculas.layouts.edit',compact('matriculas','sesiones','roles','estados'));
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
            'matriculadescargas' => '',
            'sesiones_id' => 'required',
            'rol_id' => 'required',
            'estados_id' => 'required', //'plantilla_id' => '', para no ser requerido
        ]);
        Matricula::find($id)->update($request->all());
        return redirect()->route('matriculas.layouts.index')
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
        Matricula::find($id)->delete();
        return redirect()->route('matriculas.layouts.index')
                        ->with('success','Curso deleted successfully');
    }
}
