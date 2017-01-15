<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property int $parent_id
 * @property string $login_with
 * @property string $usertype
 * @property string $user_role
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $gender
 * @property string $image_icon
 * @property string $mobile
 * @property string $contact_email
 * @property string $website
 * @property string $address
 * @property string $dob
 * @property string $country
 * @property string $study_plan
 * @property string $facebook_url
 * @property string $twitter_url
 * @property string $linkedin_url
 * @property string $dribbble_url
 * @property string $instagram_url
 * @property string $facebook_id
 * @property string $google_id
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $casts = [
		'parent_id' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'parent_id',
		'login_with',
		'usertype',
		'user_role',
		'first_name',
		'last_name',
		'email',
		'password',
		'gender',
		'image_icon',
		'mobile',
		'contact_email',
		'website',
		'address',
		'dob',
		'country',
		'study_plan',
		'facebook_url',
		'twitter_url',
		'linkedin_url',
		'dribbble_url',
		'instagram_url',
		'facebook_id',
		'google_id',
		'remember_token'
	];
}
