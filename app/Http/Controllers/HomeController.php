<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $config = [
            'title' => 'Dashboard',
            'hTitle' => 'Dashboard',
        ];
        return view('home',compact('config'));
    }
}
