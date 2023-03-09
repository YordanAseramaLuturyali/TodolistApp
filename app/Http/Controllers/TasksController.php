<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function tasks(){
        return view('tasks',[
            'title'=>'All Tasks',
            'todos'=>Tasks::latest()->Filter(request(['search']))->paginate(4)
        ]);
    }

    public function task(Tasks $task){
        return view('task',[
            'title'=>'Detail Task',
            'task'=>$task
        ]);
    }
}
