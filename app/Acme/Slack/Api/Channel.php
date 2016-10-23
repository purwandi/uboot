<?php

namespace App\Acme\Slack\Api;

use App\Acme\AbstractApi;

class Channel extends AbstractApi
{
    public function create($name)
    {
        $this->post('channels.create', [
            'name'  => $name,
            'token' => env('SLACK_TOKEN'),
        ]);
    }
}
