<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Courses extends Model
{
    protected $table = 'courses';
    protected $fillable = ['title','description','featured_image','status'];
}
