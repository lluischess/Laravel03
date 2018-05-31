<?php

namespace task;

use Illuminate\Database\Eloquent\Model;

class taskmodel extends Model
{
    
    protected $fillable = ['objetivo','fecha','usuario','estado'];
}
