<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property int $parent_id
 * @property string $category_icon
 * @property string $category_name
 * @property string $category_slug
 * @property int $status
 * @property string $meta_keywords
 * @property string $description
 * @property string $aim_category
 * @property string $careers_category
 * @property string $admission_category
 * @property string $featured_image
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'parent_id',
		'category_icon',
		'category_name',
		'category_slug',
		'status',
		'meta_keywords',
		'description',
		'aim_category',
		'careers_category',
		'admission_category',
		'featured_image'
	];
}
