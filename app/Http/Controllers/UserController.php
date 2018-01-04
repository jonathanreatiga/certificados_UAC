<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::Search($request->name)->orderBy('id', 'DESC')->paginate(5);
        return view('users.layouts.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 2); //5)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.layouts.create');
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
            'name' => 'required|unique:users',
            'usuarioapellido' => 'required',
            'usuariotipodocumento' => 'required',
            'usuarionumerodocumento' => 'required',
            'password'=>'required|min:6|confirmed',
        ]);
        //User::create($request->all());
        $user = User::create($request->only('name', 'usuarioapellido', 'usuariotipodocumento', 'usuarionumerodocumento', 'password'));
        return redirect()->route('users.layouts.index')
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
        $user = User::find($id);
        return view('users.layouts.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.layouts.edit',compact('user'));
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
            'name' => 'required|unique:users,name,'.$id,
            'usuarioapellido' => 'required',
            'usuariotipodocumento' => 'required',
            'usuarionumerodocumento' => 'required',
            'password'=>'required|min:6|confirmed',
        ]);
        User::find($id)->update($request->all());
        return redirect()->route('users.layouts.index')
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
        User::find($id)->delete();
        return redirect()->route('users.layouts.index')
                        ->with('success','Curso deleted successfully');
    }

}
