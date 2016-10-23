<?php

namespace App\Http\Controllers;

use App\Acme\GitLab\GitlabManager;

class IssueController extends Controller
{
    public function index($project)
    {
        return (new GitlabManager)->api('boards')->all('1834741');

        // return (new GitlabManager)->api('issues')->show('1834741');
    }
}
