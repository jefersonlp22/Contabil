<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interessed extends Model
{
   protected $fillable = ['id', 'name', 'phone', 'email', 'message', 'comments'];
   protected $table= 'interesseds';
}
