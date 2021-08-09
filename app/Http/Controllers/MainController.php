<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function dev(){
        return "Se puede saber por que ingresaste esta URL?";
    }
    public function sandwichbots(){
        return view('dev.sandwichbots.index');
    }
}
