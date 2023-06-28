<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function links()
    {
        return view('pages.links');
    }
}
