<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relasi One-to-Many (Setiap post bisa memiliki banyak komentar)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relasi ke user (seperti yang telah dijelaskan sebelumnya)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
