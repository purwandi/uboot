<?php

namespace App\Acme\Slack;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Purwandi\Responder\Responder
 */
class SlackFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slack';
    }
}
