<?php


namespace App\HyperTask;


use App\Models\Task;

trait HasTasks
{
    public function tasks(){
        return $this->morphMany(Task::class , 'taskable');
    }
}
