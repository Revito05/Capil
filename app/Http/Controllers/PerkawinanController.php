<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkawinanController extends Controller
{
    public function index()
    {
        return view(view: 'perkawinan');
    }
}