<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QbiController extends Controller
{
    public function index()
    {
        return view('qbi');
    }
}
