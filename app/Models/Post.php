<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'short_desc', 'author_id'];
    
    public function post_content(){
        return $this->hasOne(Content::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

}
