<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ListingCourses extends Model
{
    protected $table = 'listing_courses';
    protected $fillable = ['listing_id'];
}
