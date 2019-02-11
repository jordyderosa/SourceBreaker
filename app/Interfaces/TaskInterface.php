<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface TaskInterface{
    //get all tasks added by this user
    public function getTaskByUser($user);
    //create a new task
    public function createTask(Request $request);
    //mark task as done
    public function setTaskDone(Request $request, int $id);
    //delete task
    public function deleteTask(Request $request, int $id);
    //get all tasks
    public function getAllTasks();
    //check if the task with id=$task_id is added by logged user
    public function checkTaskOwnership(int $user_id,int $task_id);
}