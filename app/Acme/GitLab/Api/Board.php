<?php

namespace App\Acme\GitLab\Api;

use App\Acme\AbstractApi;

class Board extends AbstractApi
{
    public function all($id)
    {
        return $this->get('projects/' . $id . '/boards');
    }
}
