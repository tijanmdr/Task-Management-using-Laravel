<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = [
    	'note_title', 'note_details', 'edited_on'
    ];
}
