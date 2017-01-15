<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Inquiry
 * 
 * @property int $id
 * @property int $user_id
 * @property int $uni_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $countryCode
 * @property string $mobile
 * @property string $level
 * @property string $monthRange
 * @property string $timeOptionId
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Inquiry extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'uni_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'uni_id',
		'firstname',
		'lastname',
		'email',
		'countryCode',
		'mobile',
		'level',
		'monthRange',
		'timeOptionId'
	];
}
