<?php

namespace App\Models;

use App\HyperTask\HasTaskGroups;
use App\HyperTask\HasTasks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasTasks , HasTaskGroups;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
