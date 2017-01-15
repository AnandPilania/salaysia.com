<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityGallery extends Model
{
    protected $table = 'city_gallery';

    protected $fillable = ['listing_id','image_name'];

   
    public $timestamps = false;
	 
}
