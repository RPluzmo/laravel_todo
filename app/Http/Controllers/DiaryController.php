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
    
}