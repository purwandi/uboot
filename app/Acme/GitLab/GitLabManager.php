<?php

namespace App\Acme\GitLab;

class GitLabManager
{
    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://gitlab.com/api/v3/',
            'headers'  => [
                'PRIVATE-TOKEN' => env('GITLAB_TOKEN'),
                'Accept'        => 'application/json',
            ],
        ]);
    }

    public function api($api)
    {
        switch ($api) {
            case 'projects':
                return new Api\Project($this->client);
                break;
            case 'issues':
                return new Api\Issue($this->client);
                break;
            case 'boards':
                return new Api\Board($this->client);
                break;

            default:
                # code...
                break;
        }
    }
}
