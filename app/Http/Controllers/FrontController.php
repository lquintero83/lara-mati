<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class FrontController extends Controller
{
    
    /* para la autorizacion */
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'admin']);
    }
    /**
     * Display a listing of the resource.
     * 
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
    
    public function contacto()
    {
        return view('contacto');
    }
    
    public function reviews()
    {
        return view('reviews');
    }
    
    public function admin()
    {
        return view('admin.index');
    }
}
