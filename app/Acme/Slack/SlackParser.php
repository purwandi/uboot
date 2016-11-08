<?php

namespace App\Acme\Slack;

class SlackParser
{
    public function welcome()
    {
        return 'Hey welcome to the Froyonion
This channel is connected to

Available commands:
/uboot issues  : list open issues
/uboot issues --team <developer>  : list open issue for team <developer>
/uboot issues:create <title:string>  : open new Issue on the GitLab project
/uboot issues:close <issue_number:int>  : close an issue
/uboot labels  : list available labels
/uboot labels:create <title:string>  : create a new labels
/uboot milestones  : list of milestones
/uboot milestones:create <title:string>  : create a new milestones';
    }
}
