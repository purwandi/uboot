<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Slack;

class SlackController extends Controller
{
    public function index()
    {
        $response = Slack::api('channel')->all();

        return json_encode($response);
    }
}
