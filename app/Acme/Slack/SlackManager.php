<?php

namespace App\Acme\Slack;

class SlackManager
{
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://slack.com/api/',
            'headers'  => [
                'HTTP_Authorization' => 'Bearer ' . env('SLACK_TOKEN'),
                'Accept'             => 'application/json',
            ],
        ]);
    }

    public function api($api)
    {
        switch ($api) {
            case 'channels':
                return new Api\Channel($this->client);
                break;

            default:
                # code...
                break;
        }
    }
}
