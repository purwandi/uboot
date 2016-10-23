<?php

class ProjectTest extends TestCase
{
    public function testCreateProject()
    {
        $this->json('POST', 'api/projects', [
            'name'        => 'Foobar project',
            'description' => 'Foobar test project description',
        ]);

        $this->assertEquals(200, $this->response->status());

        $this->seeInDatabase('projects', [
            'name'        => 'Foobar project',
            'description' => 'Foobar test project description',
        ]);
    }
}
