<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feesdate extends Model
{
    protected $table = 'fees_date';

    protected $fillable = ['id', 'start_date'];


	public $timestamps = false;
   
}
