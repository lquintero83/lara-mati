<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Response
     */
    public function index()
    {
        return "Estoy en el index";
    }
    
    /**
     * Show the form fot creating a new resource
     * 
     * @return Response
     */
    public function create()
    {
        return "Esto seria el formulario para crear";
    }
}
