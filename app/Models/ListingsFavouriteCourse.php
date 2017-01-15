<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListingsFavouriteCourse
 * 
 * @property int $id
 * @property int $user_id
 * @property int $listing_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class ListingsFavouriteCourse extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'listing_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'listing_id'
	];
}
