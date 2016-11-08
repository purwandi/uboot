<?php

namespace App\Acme\GitLab;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Purwandi\Responder\Responder
 */
class GitLabFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gitlab';
    }
}
