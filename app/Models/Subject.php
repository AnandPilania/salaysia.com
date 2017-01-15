<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Subject
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 *
 * @package App\Models
 */
class Subject extends Eloquent
{
	protected $table = 'subject';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'slug'
	];
}
