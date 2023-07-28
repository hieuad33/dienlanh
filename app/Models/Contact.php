<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
   
    protected $table = 'contact';
    protected $primaryKey = 'id';

       const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
