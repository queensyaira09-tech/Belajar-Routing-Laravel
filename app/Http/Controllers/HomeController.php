<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function data()
    {
        return view('data');
    }
}
