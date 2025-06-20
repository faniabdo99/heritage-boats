<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $guarded = [];
    use HasFactory;
    public  function Blog(){
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
