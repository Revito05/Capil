<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahagamaController extends Controller
{
    public function index()
    {
        return view(view: 'tambahagama');
    }
}