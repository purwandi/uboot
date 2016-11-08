<?php

namespace App\Acme\Slack;

use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('slack', function ($app) {
            return new SlackManager;
        });
    }
}
