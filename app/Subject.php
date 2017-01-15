<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';

    protected $fillable = ['id', 'title', 'slug'];


	public $timestamps = false;
   
}
