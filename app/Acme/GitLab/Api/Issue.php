<?php

namespace App\Acme\GitLab\Api;

use App\Acme\AbstractApi;

class Issue extends AbstractApi
{
    public function create($id, $title, $desciption = null, array $options = [])
    {
        $options = array_merge(['title' => $title, 'desciption' => $desciption], $options);

        return $this->post('projects/' . $id . '/issues', $options);
    }

    public function show($id, array $options = [])
    {
        $options = http_build_query($options);

        return $this->get('projects/' . $id . '/issues?' . $options);
    }
}
