<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
         protected $primaryKey = 'posts_id';
      protected $fillable = [
        'title',
        'slug',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function files()
    {
        return $this->hasMany(file::class, 'post_id');
    }
}
