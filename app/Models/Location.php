<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Location
 * 
 * @property int $id
 * @property string $location_name
 * @property string $location_slug
 * @property int $status
 *
 * @package App\Models
 */
class Location extends Eloquent
{
	protected $table = 'location';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'location_name',
		'location_slug',
		'status'
	];
}
