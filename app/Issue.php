<?php

namespace App;

use App\Observers\IssueObserver;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'g_id', 'g_iid', 'project_id', 'author_id', 'assignee_id', 'title', 'description',
        'status', 'weight', 'due_date',
    ];

    public static function boot()
    {
        parent::boot();
        static::observe(new IssueObserver);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
