<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserPermission
 * 
 * @property int $id
 * @property int $user_id
 * @property string $Countries
 * @property string $Universities
 * @property string $Courses
 * @property string $Services
 * @property string $Brands
 * @property string $Testimonials
 * @property string $Menu
 * @property string $Inqueries
 * @property string $Users
 * @property string $Setting
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class UserPermission extends Eloquent
{
	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'Countries',
		'Universities',
		'Courses',
		'Services',
		'Brands',
		'Testimonials',
		'Menu',
		'Inqueries',
		'Users',
		'Setting'
	];
}
