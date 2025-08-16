<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment'; 
    protected $fillable = ['post_id','author','message'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
