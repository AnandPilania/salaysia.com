<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuBar extends Model
{
    protected $table = 'menubar';

    protected $fillable = ['id', 'parent_id', 'ordering', 'title', 'slug', 'title'];


	public $timestamps = false;
   
}
