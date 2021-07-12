<?php


namespace App\HyperTask;


use App\Models\TaskGroup;

trait HasTaskGroups
{
    public function taskGroups(){
        return $this->morphMany(TaskGroup::class , 'groupable');
    }
}