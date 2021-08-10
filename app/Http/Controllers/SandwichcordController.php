<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandwichcordController extends Controller
{
    public function index(){
        return view('dev.sandwichbots.sandwichcord.index');
    }
    public function latest(){
        return view('dev.sandwichbots.sandwichcord.latest');
    }
}
