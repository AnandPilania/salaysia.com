<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FavouriteCourse extends Model
{
    protected $table = 'listings_favourite_courses';
    protected $fillable = ['user_id','listing_id'];
}
