<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Cinema\Http\Requests;
use Cinema\Http\Requests\LoginRequest;
use Cinema\Http\Controllers\Controller;

class LogController extends Controller
{
    //
    
//    public function __construct() {
//        $this->middleware('auth');   
//    }

    
    
    
        /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(LoginRequest $request)
    {                
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return Redirect::to('/admin');
        }
        
        Session::flash('message-error', 'Datos son incorrectos');
        
        return Redirect::to('/');
    }
    
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
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

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
    }
}
