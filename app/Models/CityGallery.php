<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CityGallery
 * 
 * @property int $id
 * @property int $listing_id
 * @property string $image_name
 *
 * @package App\Models
 */
class CityGallery extends Eloquent
{
	protected $table = 'city_gallery';
	public $timestamps = false;

	protected $casts = [
		'listing_id' => 'int'
	];

	protected $fillable = [
		'listing_id',
		'image_name'
	];
}
