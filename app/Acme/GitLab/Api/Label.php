<?php

namespace App\Acme\GitLab\Api;

use App\Acme\AbstractApi;

class Label extends AbstractApi
{
    protected $project;

    public function project($id)
    {
        $this->project = $id;
        return $this;
    }

    public function create($name, $color)
    {
        return $this->post('projects/' . $this->project . '/labels', [
            'name'  => $name,
            'color' => $color,
        ]);
    }
}
