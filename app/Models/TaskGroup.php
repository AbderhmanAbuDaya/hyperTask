<?php

namespace App\Models;

use App\HyperTask\HasTasks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    use HasFactory , HasTasks;
    protected $guarded = [];

    public function groupable(){
        return $this->morphTo();
    }
}
