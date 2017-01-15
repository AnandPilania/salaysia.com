<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ListingsRank
 * 
 * @property int $id
 * @property int $listing_id
 * @property string $ranktype
 * @property string $ranking
 *
 * @package App\Models
 */
class ListingsRank extends Eloquent
{
	protected $table = 'listings_rank';
	public $timestamps = false;

	protected $casts = [
		'listing_id' => 'int'
	];

	protected $fillable = [
		'listing_id',
		'ranktype',
		'ranking'
	];
}
