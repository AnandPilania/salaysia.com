<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FavouriteUniversity extends Model
{
    protected $table = 'listings_favourite_university';
    protected $fillable = ['user_id','listing_id'];
}
