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
        return (new GitlabManager)->api('projects')->show(1834741);
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

        (new SlackManager)->api('channel')->create($project->name);

        // (new GitlabManager)->api('projects')->create($project->name, [
        //     'description'  => $project->description,
        //     'namespace_id' => 866275,
        // ]);

        // event(\App\Events\ProjectCreated::class, $project);

        return $project;
    }
}
