<?php

namespace App\Listeners;

use App\Events\IssueCreated;
use GitLab;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IssueCreatedListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  IssueCreated  $event
     * @return void
     */
    public function handle(IssueCreated $event)
    {
        $issue = $event->issue;

        // Create gitlab issue
        $gitlab = GitLab::api('issues')
            ->project($issue->project_id)
            ->create($issue->title, $issue->description, [
                'due_date' => $issue->due_date ?: null,
            ]);

        $issue->g_id  = $gitlab->id;
        $issue->g_iid = $gitlab->iid;
        $issue->save();
    }
}
