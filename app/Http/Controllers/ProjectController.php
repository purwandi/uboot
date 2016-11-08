<?php

namespace App\Http\Controllers;

use App\Acme\GitLab\GitlabManager;
use App\Acme\Slack\SlackManager;
use App\Http\Requests\ProjectRequest;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
        // return (new GitlabManager)->api('projects')->show(1834741);
        // return (new GitlabManager)->api('projects')->all();

        // dd(GitLab::connection('main')->api('projects')->all());

        // return GitLab::connection('main')->api('projects')->all();
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        $slack  = (new SlackManager)->api('channel')->create($project->name);
        $gitlab = (new GitlabManager)->api('projects')->create($project->name, [
            'description'  => $project->description,
            'namespace_id' => env('GITLAB_NAMESPACE'),
        ]);

        \Log::info($slack);
        \Log::info($gitlab);

        $project->gitlab_namespace_id = env('GITLAB_NAMESPACE');
        $project->gitlab_id           = json_decode($gitlab)->id;
        $project->slack_channel_id    = json_decode($slack)->channel->id;
        $project->save();

        return $project;
    }
}
