<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    public function show($id)
    {
        return view('board.show');
    }
}
