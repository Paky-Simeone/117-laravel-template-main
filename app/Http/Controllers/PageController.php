<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    /** 
    * Mostra la HomePage del sito
    */

    public function index(){
        return view('home');
    }

    /** 
    * Mostra la Pagina About del sito
    */

    public function about(){
        return view('about');
    }

    /** 
    * Mostra la Pagina Contacts del sito
    */

    public function contacts(){
        return view('contacts');
    }
}
