<?php

namespace App\Acme;

class AbstractApi
{
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function get($url, $options = [])
    {
        $response = $this->client->request('GET', $url, [
            'query' => $options,
        ]);

        return json_decode($response->getBody());
    }

    protected function post($url, $options)
    {
        $response = $this->client->request('POST', $url, [
            'form_params' => $options,
        ]);

        return json_decode($response->getBody());
    }
}
