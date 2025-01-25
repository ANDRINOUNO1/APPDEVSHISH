<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondPageController extends Controller
{
    public function index(){
        return view('secondPage');
    }
    public function home(){
        return view('welcome');
    }
}
