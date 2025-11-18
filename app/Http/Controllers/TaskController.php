<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {

        $Task = task::where('user_id',Auth::user()->id)->where('status','in_progress')->get();

        $Category = categorie::where('user_id', Auth::user()->id)->get();

        return view('Page.Task', compact('Task', 'Category'));
    }

    public function TaskCompletedPage()
    {


        $Task = task::where('status', 'completed')->where('user_id', Auth::user()->id)->get();

        $Category = categorie::where('user_id', Auth::user()->id)->get();

        return view('Page.TaskCompleted', compact('Task', 'Category'));
    }

    public function create()
    {
        return view('Page.TaskCompleted');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:200',
            'status' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        $Task = [
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'status' => $request->status,
            'due_date' => $request->due_date,
            'category_id' => $request->category,
            'description' => $request->description
        ];


        task::create($Task);

        return redirect()->route('ShowTaskPage')->with('success', 'Task Successfully Add');
    }



    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|min:3|max:200',
            'status' => 'required',
            'category' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
            'completed_at' => $request->completed_at,
            'category_id' => $request->category,
        ]);

        return redirect()->route('ShowTaskPage')->with('success', 'Task Successfully Updated');
    }

    public function destroy($id)
    {
        $Task = task::find($id);

        $Task->delete();


        return redirect()->route('ShowTaskPage');
    }
}
