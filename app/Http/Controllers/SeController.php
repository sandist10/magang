<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeController extends Controller
{
    public function index()
    {
        return view('se');
    }
}
