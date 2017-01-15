<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankType extends Model
{
    protected $table = 'rank_type';

    protected $fillable = ['id', 'title', 'slug'];


	public $timestamps = false;
   
}
