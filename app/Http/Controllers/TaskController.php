<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Repository\TaskEloquentRepository;

class TaskController extends Controller
{
    private $taskRepository;

    //inject repository
    public function __construct(TaskEloquentRepository $taskRepository){
        $this->taskRepository = $taskRepository;
    }


    public function create(Request $request){

       return $this->taskRepository->createTask($request);

    }

    public function setTaskDone(Request $request, $id){

        return $this->taskRepository->setTaskDone($request,$id);

    }


    public function delete(Request $request, $id){

        return $this->taskRepository->deleteTask($request,$id);

    }

    public function showAllTasks(){

        return $this->taskRepository->getAllTasks();

    }


    public function show(Request $request){
        $user = $request->user();
        $task = $this->taskRepository->getTaskByUser($user);
        if(count($task)>0){
            return $task;
        }else{
            return "No Task found";
        }
    }




}
