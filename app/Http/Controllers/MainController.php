<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function new_note(){
        echo 'new note';
    }












}
