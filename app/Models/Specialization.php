<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Specialization
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $raking
 *
 * @package App\Models
 */
class Specialization extends Eloquent
{
	protected $table = 'specialization';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'slug',
		'raking'
	];
}
