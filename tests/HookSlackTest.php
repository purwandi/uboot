<?php

class HookSlackTest extends TestCase
{
    public function testHandleEmptyTask()
    {
        $this->json('POST', 'hooks/slack', [
            'token'        => str_random(12),
            'team_id'      => 'T0221',
            'team_domain'  => '',
            'channel_id'   => '',
            'channel_name' => '',
            'user_id'      => '',
            'user_name'    => '',
            'command'      => '/uboot',
            'text'         => '',
            'response_url' => '',
        ]);

        $this->seeJson([
            'text' => 'Hey welcome to the Froyonion
This channel is connected to

Available commands:
/uboot issues  : list open issues
/uboot issues --team <developer>  : list open issue for team <developer>
/uboot issues:create <title:string>  : open new Issue on the GitLab project
/uboot issues:close <issue_number:int>  : close an issue',
        ]);
    }

    public function testNotifyInChannel()
    {
        $this->json('POST', 'hooks/slack', [
            'token'        => str_random(12),
            'team_id'      => 'T0221',
            'team_domain'  => '',
            'channel_id'   => '',
            'channel_name' => '',
            'user_id'      => '',
            'user_name'    => '',
            'command'      => '/uboot',
            'text'         => '--notify',
            'response_url' => '',
        ]);

        $this->seeJson([
            'response_type' => 'in_channel',
        ]);
    }
}
