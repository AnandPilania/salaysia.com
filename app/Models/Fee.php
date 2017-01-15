<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Fee
 * 
 * @property int $id
 * @property float $fees
 * @property string $slug
 * @property \Carbon\Carbon $start_date
 *
 * @package App\Models
 */
class Fee extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'fees' => 'float'
	];

	protected $dates = [
		'start_date'
	];

	protected $fillable = [
		'fees',
		'slug',
		'start_date'
	];
}
