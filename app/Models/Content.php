<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    // use HasFactory;
    protected $fillable = ['post_id', 'description'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
