<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GitLab;

class GitLabController extends Controller
{
    public function index()
    {
        return GitLab::api('projects')->all();
    }
}
