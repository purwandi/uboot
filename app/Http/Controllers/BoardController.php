<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    public function index()
    {
        return view('board.index');
    }
}
