<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Durations extends Model
{
    protected $table = 'durations';

    protected $fillable = ['sub_category_name', 'sub_category_slug'];


	public $timestamps = false;
 
	
}
