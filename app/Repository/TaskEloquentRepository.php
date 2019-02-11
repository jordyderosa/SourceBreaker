<?php

namespace App\Repository;

use App\Interfaces\TaskInterface;
use Illuminate\Http\Request;
use App\Task;

class TaskEloquentRepository implements TaskInterface{


    public function createTask(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->user_id = $request->user()->id;
        $task->save();

        return 'Task created->'.$task->title;
    }


    public function getTaskByUser($user){
         return $user->tasks()->select('title','completed')->get();
    }

    public function setTaskDone(Request $request, int $id)
    {
        $task = Task::findOrFail($id);
        $data=['completed'=>1];

        if($this->checkTaskOwnership($request->user()->id,$id)) {
            $task->update($data);
            return "task $id updated";
        }
        else{
            return "User unauthorized to manage this task";
        }
    }

    public function deleteTask(Request $request, int $id)
    {
        $task = Task::findOrFail($id);
        if($this->checkTaskOwnership($request->user()->id,$id)) {
            $task->delete();
            return "task $id deleted";
        }
        else{
            return "User unauthorized to manage this task";
        }

    }

    public function getAllTasks()
    {
        $task = Task::join('users','users.id','=','tasks.user_id')->select('tasks.*','users.name')->get();
        if(count($task)>0){
            return $task;
        }else{
            return "No Task found";
        }
    }

    public function checkTaskOwnership(int $user_id,int $task_id){

        $task = Task::findOrFail($task_id);
        if($task->user_id == $user_id) {
            return true;
        }
        else
        {
            return false;
        }

    }
}