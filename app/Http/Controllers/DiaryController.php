<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;
class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diary.index", compact("diaries"));
    }

    
    public function show(Diary $diary) {
        return view("diary.show", compact("diary"));
      }

    public function create() {
        return view("diary.create");
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required", ],
            "date" => ["required","date"]
        ]);
        Diary::create([
            "title" => $request->title,
            "body" => $request->body,
            "date" => $request->date
        ]);
        return redirect("/diaries");
    }
    public function edit(Diary $diary) {
        return view("diary.edit", compact("diary"));
    }

    public function update(Request $request, Diary $diary) {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required" ],
            "date" => ["required","date"]
        ]);
        $diary->title = $validated["title"];
        $diary->body = $validated["body"];
        $diary->date = $validated["date"];
        $diary->save();
        return view("diary.show", compact("diary"));
    }
    public function destroy(Diary $diary) {
        $diary->delete();
        return redirect("/diaries");
    }
}