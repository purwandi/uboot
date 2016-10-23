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
            'command'      => '/ubot',
            'text'         => '',
            'response_url' => '',
        ]);
    }
}
