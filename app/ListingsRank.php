<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingsRank extends Model
{
    protected $table = 'listings_rank';

    protected $fillable = ['listing_id'];


	public $timestamps = false;
   
}
