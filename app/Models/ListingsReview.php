<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListingsReview
 * 
 * @property int $id
 * @property int $user_id
 * @property int $listing_id
 * @property string $reviews_title
 * @property string $review
 * @property int $rating
 * @property int $date
 *
 * @package App\Models
 */
class ListingsReview extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'listing_id' => 'int',
		'rating' => 'int',
		'date' => 'int'
	];

	protected $fillable = [
		'user_id',
		'listing_id',
		'reviews_title',
		'review',
		'rating',
		'date'
	];
}
