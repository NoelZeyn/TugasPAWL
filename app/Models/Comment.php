<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relasi One-to-Many (Setiap komentar berhubungan dengan satu post)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
