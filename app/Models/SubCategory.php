<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SubCategory
 * 
 * @property int $id
 * @property int $cat_id
 * @property string $sub_category_name
 * @property string $sub_category_slug
 * @property int $status
 * @property string $featured_image
 * @property string $description
 *
 * @package App\Models
 */
class SubCategory extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'cat_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'cat_id',
		'sub_category_name',
		'sub_category_slug',
		'status',
		'featured_image',
		'description'
	];
}
