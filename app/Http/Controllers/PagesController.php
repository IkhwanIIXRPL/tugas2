<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function menu(){
        return view('menu');
    }
    public function contact(){
        return view('contact');
    }
}
