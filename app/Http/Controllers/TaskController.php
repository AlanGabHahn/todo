<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Task,
    Category
};

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = Task::all()->take(3);

        return view('home', ['tasks' => $tasks]);
    }

    public function create(Request $request)
    {
        return view('tasks.create',[
            'categories' => Category::all()
        ]);
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        $task = Task::find($id);

        if (!$task) {
            return redirect(route('home'));
        }

        $categories = Category::all();
        $data['categories'] = $categories;

        $data['task'] = $task;

        return view('tasks.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'category_id',
            'description',
            'due_date'
        ]);

        $data['user_id'] = 1; /** remover após ter o login */

        $task = Task::create($data);

        return redirect(route('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->only([
            'title',
            'category_id',
            'description',
            'due_date',
        ]);

        $data['is_done'] = $request->is_done ? true : false;

        $task = Task::find($request->id);

        if (!$task) {
            return 'Erro de tarefa não existente';
        }

        $task->update($data);
        $task->save();
        return redirect(route('home'));
    }

    public function checkedTask(Request $request)
    {
        $task = Task::findOrFail($request->taskId);
        $task->is_done = $request->status;
        $task->save();
        return ['success' => true];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        $task = Task::find($id);

        if ($task) {
            $task->delete();
        }

        return redirect(route('home'));
    }
}
