<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {
     protected $table = 'countries';

    protected $fillable = ['title','description','featured_image','status'];

}
