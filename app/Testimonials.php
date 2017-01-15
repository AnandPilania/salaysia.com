<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';

    protected $fillable = ['title','description','featured_image','status'];




   
}
