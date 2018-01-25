<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Genre;

class GeneroController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {        
        return view('genero.index');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listing(){
        $genres = Genre::all();
        
        return response()->json(
                $genres->toArray()
                );
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            Genre::create($request->all());
            
            return response()->json([
                "mensaje"=>"Genero creado"
            ]);
        }
        
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
        $genre = Genre::find($id);
        
        return response()->json(
                $genre->toArray());
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
