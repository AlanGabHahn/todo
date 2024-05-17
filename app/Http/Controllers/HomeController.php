<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $filteredDate = isset($request->date) ? $request->date : date('Y-m-d');

        $data['date_string'] = '16 de maio';
        $data['date_prev_button'] = '2024-05-15';
        $data['date_next_button'] = '2024-05-17';

        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();

        return view('home',  $data);
    }
}
