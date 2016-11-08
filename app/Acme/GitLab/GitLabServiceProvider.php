<?php

namespace App\Acme\GitLab;

use Illuminate\Support\ServiceProvider;

class GitLabServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('gitlab', function ($app) {
            return new GitLabManager;
        });
    }
}
