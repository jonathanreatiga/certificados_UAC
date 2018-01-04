<?php

namespace App\Http\Controllers;

use App\Estado;

use Illuminate\Http\Request;

class EstadoController extends Controller
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
        $estados = Estado::Search($request->estadonombre)->orderBy('id', 'DESC')->paginate(5);
        return view('estados.layouts.index',compact('estados'))
            ->with('i', (request()->input('page', 1) - 1) * 2); //5)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.layouts.create');
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
            'estadonombre' => 'required',
            'estadodescripcion' => 'required',
        ]);
        Estado::create($request->all());
        return redirect()->route('estados.layouts.index')
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
        $estado = Estado::find($id);
        return view('estados.layouts.show',compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = Estado::find($id);
        return view('estados.layouts.edit',compact('estado'));
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
            'estadonombre' => 'required',
            'estadodescripcion' => 'required',
        ]);
        Estado::find($id)->update($request->all());
        return redirect()->route('estados.layouts.index')
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
        Estado::find($id)->delete();
        return redirect()->route('estados.layouts.index')
                        ->with('success','Curso deleted successfully');
    }

}
