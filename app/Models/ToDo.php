<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $fillable = ["content", "completed", 'user_id'];
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
