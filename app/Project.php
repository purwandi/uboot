<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'gitlab_namespace_id', 'gitlab_id', 'slack_id'];
}
