<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmController extends Controller
{
    public function index()
    {
        return view('em');
    }
}
