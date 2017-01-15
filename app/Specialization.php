<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = 'specialization';

    protected $fillable = ['id', 'title', 'slug', 'raking'];


	public $timestamps = false;
   
}
