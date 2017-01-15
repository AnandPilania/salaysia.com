<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CoursesTran
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $lang
 *
 * @package App\Models
 */
class CoursesTran extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'description',
		'lang'
	];
}
