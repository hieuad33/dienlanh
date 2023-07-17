<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
       protected $primaryKey = 'category_id';
       protected $fillable = [
        'category_id',
        'name',
        'slug',
        'parent_id',
    ];

    public function posts()
    {
        return $this->hasMany(Posts::class,'category_id','category_id');
    }

   
}
