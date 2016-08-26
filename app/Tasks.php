<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
    	'task_title', 'task_details', 'edited_on'
    ];
}
