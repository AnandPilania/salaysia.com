<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FeesCycle
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 *
 * @package App\Models
 */
class FeesCycle extends Eloquent
{
	protected $table = 'fees_cycle';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'slug'
	];
}
