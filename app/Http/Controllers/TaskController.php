<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:tasks,title',
            'description' => 'required'
        ],[
            'title.unique' => 'Title is already been taken'
        ]
    );
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => false
        ]);

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Task::findOrFail($id);
       
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tit' => 'required|unique:tasks,title',
            'des' => 'required',
            'status' => 'required',
        ]);
        Task::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->status
        ]);

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::findOrFail($id)->delete();

        return redirect()->route('tasks.index');
    }
}
