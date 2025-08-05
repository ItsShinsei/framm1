<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view('welcome'); // Assuming you want to return a view named 'welcome'
    }
}