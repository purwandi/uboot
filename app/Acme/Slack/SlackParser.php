<?php

namespace App\Acme\Slack;

class SlackParser
{
    public function parse($str)
    {
        return $this->emptyResponse();
    }

    public function emptyResponse()
    {
        return [
            'text' => 'Hey welcome to the Froyonion
This channel is connected to

Available commands:
/ubot create  : open new Issue on the GitLab project
/ubot close <issue number>  : close an issue
/ubot issues  : list open issues
/ubot issues --team <developer>  : list open issue for team <developer>
            ',
        ];
    }
}
