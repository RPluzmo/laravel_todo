<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diary extends Model
{
    protected $fillable = ["title", "body", "date", 'user_id'];
    use HasFactory;

    public function diaries() {
        return $this->hasMany(Diary::class);
    }
}

