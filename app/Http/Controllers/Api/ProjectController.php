<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Project;
use DB;
use GitLab;
use Illuminate\Http\Request;
use Slack;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {
            $project = Project::create([
                'name'                => str_slug($request->input('name')),
                'description'         => $request->input('description'),
                'gitlab_id'           => $request->input('gitlab_id') ?: null,
                'gitlab_namespace_id' => env('GITLAB_NAMESPACE'),
                'slack_id'            => $request->input('slack_id') ?: null,
            ]);

            if ($project->gitlab_id == '') {
                $gitlab = GitLab::api('projects')->create($project->name, [
                    'description'  => $project->description,
                    'namespace_id' => $project->gitlab_namespace_id,
                ]);

                $project->gitlab_id = $gitlab->id;

            }

            if ($project->slack_id == '') {
                $slack             = Slack::api('channels')->create($project->name);
                $project->slack_id = $slack->channel->id;
            }

            $project->save();

            return $project;
        });

    }
}
