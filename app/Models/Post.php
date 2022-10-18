<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'photo',
        'post_id',
        'category',
        'slug',
    ];
    public function contect()
    {
        return $this->hasMany(PostDetails::class, 'post_id', 'id');
    }
    public function post_content()
    {
        return $this->hasMany(PostDetails::class, 'post_id', 'id');
    }
}
