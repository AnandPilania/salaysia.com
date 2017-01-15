<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FeesDate
 * 
 * @property int $id
 * @property string $start_date
 *
 * @package App\Models
 */
class FeesDate extends Eloquent
{
	protected $table = 'fees_date';
	public $timestamps = false;

	protected $fillable = [
		'start_date'
	];
}
