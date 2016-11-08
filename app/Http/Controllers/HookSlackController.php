<?php

namespace App\Http\Controllers;

use App\Acme\Parser;
use Illuminate\Http\Request;

class HookSlackController extends Controller
{
    protected $parser;

    public function __construct()
    {
        $this->parser = new Parser;
    }

    public function store(Request $request)
    {
        return $this->parser->parse($request->input('text'));
    }
}
