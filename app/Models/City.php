<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class City
 * 
 * @property int $id
 * @property int $country_id
 * @property string $city_name
 * @property string $slug
 * @property string $famous_places
 * @property string $description
 * @property string $featured_image
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class City extends Eloquent
{
	protected $table = 'city';

	protected $casts = [
		'country_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'country_id',
		'city_name',
		'slug',
		'famous_places',
		'description',
		'featured_image',
		'status'
	];
}
