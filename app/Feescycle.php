<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feescycle extends Model
{
    protected $table = 'fees_cycle';

    protected $fillable = ['id', 'title', 'slug'];


	public $timestamps = false;
   
}
