<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'ranking';

    protected $fillable = ['id','rank_id', 'rank_min', 'rank_max', 'slug'];


	public $timestamps = false;
   
}
