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
}