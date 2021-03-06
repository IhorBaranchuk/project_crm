<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddTaskController extends Controller
{
    public function store(StoreTask $request)
    {
        $task = new Task();
        $task->fill($request->input() + [
                'user_id_customer' => Auth::id(),
            ]);
        $task->save();
        return redirect()->back()->with('message', 'DONE!');
    }

    public function index()
    {
        $usersIdDoer = DB::table('users')->get()->whereNotIn('id', Auth::id());
        return view('addtask', compact('usersIdDoer'));
    }
}
