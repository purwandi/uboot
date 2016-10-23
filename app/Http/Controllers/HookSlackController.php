<?php

namespace App\Http\Controllers;

use App\Acme\Slack\SlackParser;
use Illuminate\Http\Request;

class HookSlackController extends Controller
{
    protected $parser;

    public function __construct()
    {
        $this->parser = new SlackParser;
    }

    public function store(Request $request)
    {
        \Log::info($request->all());
        return $this->parser->parse('');
    }
}
