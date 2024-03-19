<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /** 
    * Mostra la HomePage del sito
    */
    public function index(){
        return view('home');
    }
}
