<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaxSandwichBotController extends Controller
{
    public function index(){
        return view('dev.bot.index');
    }
}
