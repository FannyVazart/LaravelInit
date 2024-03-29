<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class,'comment_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
