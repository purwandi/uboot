<?php

namespace App\Acme\GitLab\Api;

use App\Acme\AbstractApi;

class Issue extends AbstractApi
{
    protected $project;

    public function project($id)
    {
        $this->project = $id;
        return $this;
    }

    public function create($title, $description = null, array $options = [])
    {
        $options = array_merge(['title' => $title, 'description' => $description], $options);

        if ($this->project) {
            return $this->post('projects/' . $this->project . '/issues', $options);
        }

        throw new \Exception('Please assigned project first');
    }

    public function show($id, array $options = [])
    {
        $options = http_build_query($options);

        return $this->get('projects/' . $id . '/issues?' . $options);
    }
}
