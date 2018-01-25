<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Cinema\User;
use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;

use Illuminate\Routing\Route;

class UsuarioController extends Controller
{    
    
        
    
    public function __construct(Route $route) {
        /* para la autorizacion */
        $this->middleware('auth'); //autenticacion
//        $this->middleware('admin', ['only' => ['create', 'edit']]); //privilegios
        $this->middleware('admin'); //privilegios
        $this->user = User::find($route->getParameter('usuario'));        
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
//        $users = User::all(); //muestra todos los registros
        $users = User::paginate(10);
       return view('usuario.index', compact('users') );
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        
        Session::flash('message', 'Usuario Creado Correctamente');
        
        return Redirect::to('/usuario');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {   
       return view('usuario.edit', ['user'=>$this->user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, UserUpdateRequest $request)
    {

        $this->user->fill($request->all());
        $this->user->save();
        
        Session::flash('message', 'Usuario Editado Correctamente');
        
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $this->user->delete();        
        Session::flash('message', 'Usuario Eliminado Correctamente');
        
        return Redirect::to('/usuario');
    }
    
}
