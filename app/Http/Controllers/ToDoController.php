<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDo;
class ToDoController extends Controller
{
    public function index()
    {// TE BIJA $todos = ToDo::all();
        $todos = auth()->user()->todos;
        return view("todos.index", compact("todos"));
    }
   
    public function show(ToDo $todo) {
        if ($todo->user_id !== auth()->id()) {
            abort(403);
        }
        return view("todos.show", compact("todo"));
    }

    public function create() {
    return view("todos.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
        ]);
        ToDo::create([
            "content" => $request->content,
            "completed" => false,
            'user_id' => auth()->id()

        ]);
        return redirect("/todos");
        }

    public function edit(ToDo $todo) {
        if ($todo->user_id !== auth()->id()) {
            abort(403);
        }
        return view("todos.edit", compact("todo"));
    }

    public function update(Request $request, ToDo $todo) {
        if ($todo->user_id !== auth()->id()) {
            abort(403);
        }
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
        ]);
        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];
        $todo->save();
        return view("todos.show", compact("todo"));
    }
    public function destroy(ToDo $todo) {
        if ($todo->user_id !== auth()->id()) {
            abort(403);
        }
        $todo->delete();
        return redirect("/todos");
    }
}
