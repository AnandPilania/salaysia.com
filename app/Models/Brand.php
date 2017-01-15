<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Brand
 * 
 * @property int $id
 * @property string $title
 * @property string $brand_slug
 * @property string $description
 * @property string $services
 * @property string $products
 * @property string $team
 * @property string $contact_us
 * @property string $featured_image
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Brand extends Eloquent
{
	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'brand_slug',
		'description',
		'services',
		'products',
		'team',
		'contact_us',
		'featured_image',
		'status'
	];
}
