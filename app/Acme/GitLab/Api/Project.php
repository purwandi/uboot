<?php

namespace App\Acme\GitLab\Api;

use App\Acme\AbstractApi;

class Project extends AbstractApi
{
    public function all()
    {
        return $this->get('projects');
    }

    public function show($id)
    {
        return $this->get('projects/' . $id);
    }

    public function create($name, $options)
    {
        return $this->post('projects', array_merge(['name' => $name], $options));
    }
}
