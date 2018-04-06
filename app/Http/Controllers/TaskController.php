<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks',$tasks));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $task = Task::create(['title' => $request->title,'description' => $request->description]);
        return redirect('/tasks/');
    }

    public function show(Task $task)
    {
        return view('tasks.show',compact('task',$task));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task',$task));
    }

    public function update(Request $request, Task $task)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('tasks');
    }
}
