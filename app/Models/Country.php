<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $auther_name
 * @property string $title
 * @property string $testimonial_slug
 * @property string $description
 * @property string $featured_image
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Country extends Eloquent
{
	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'auther_name',
		'title',
		'testimonial_slug',
		'description',
		'featured_image',
		'status'
	];
}
