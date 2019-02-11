<?php

namespace App\Observers;

use App\Task;



class TaskEloquentObserver{


    public function creating(Task $task){
        //code to exec
        //$task->title="creating fired";
    }


    public function updating(Task $task){
        //code to exec
    }

    public function deleting(Task $task){
        //code to exec
    }


}