<?php

namespace App\Observers;

use App\Project;

class ProjectObserver
{
    public function created(Project $project)
    {
        // call to create gitlab project
        // call to create slack channel
    }
}
