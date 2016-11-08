<?php

namespace App\Acme\Slack\Api;

use App\Acme\AbstractApi;

class Channel extends AbstractApi
{
    public function create($name)
    {
        return $this->post('channels.create', [
            'name'  => $name,
            'token' => env('SLACK_TOKEN'),
        ]);
    }

    public function all()
    {
        return $this->get('channels.list', [
            'token' => env('SLACK_TOKEN'),
        ]);
    }
}
