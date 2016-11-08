<?php

class IssueTest extends TestCase
{
    public function testCreate()
    {
        $issue = \App\Issue::create([
            'title'       => 'Lorem',
            'description' => 'About description',
            'project_id'  => 1888467,
        ]);

        $issue->fresh();
        echo $issue;
    }
}
