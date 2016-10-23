<?php

namespace App\Acme;

class AbstractApi
{
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function get($url)
    {
        $response = $this->client->request('GET', $url);
        return $response->getBody();
    }

    public function post($url, $options)
    {
        $response = $this->client->request('POST', $url, [
            'form_params' => $options,
        ]);
    }
}
