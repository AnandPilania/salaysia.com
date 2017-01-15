<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
     protected $table = 'city';

    protected $fillable = ['city_name','famous_places','description','featured_image','status'];

}
