<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{ //Control de rutas de proyecto

    public function __invoke(){
        //return view('welcome');
        return view("home");
    }
}
