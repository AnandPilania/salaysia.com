<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menubar
 * 
 * @property int $id
 * @property int $parent_id
 * @property int $ordering
 * @property string $title
 * @property string $slug
 * @property string $link
 *
 * @package App\Models
 */
class Menubar extends Eloquent
{
	protected $table = 'menubar';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'ordering' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'ordering',
		'title',
		'slug',
		'link'
	];
}
