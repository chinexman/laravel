<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\project;

class projectTasksController extends Controller
{
    public function update(Task $task){

    	$task->update(['completed'=>request()->has('completed')]);
    	return back();
    }

    public function store(project $project){
    	$attributes=request()->validate(['description'=>'required']);

      $project->addTask($attributes);

      //$project->addTask(request('description'));


      //Task::create([

      //	'project_id'=>$project->id,
      // 'description'=>request('description')

   
      //]);

      return back();

    }
}
