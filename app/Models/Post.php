<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Post
 * 
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $body
 * @property string $featured_image
 * @property string $slug
 * @property bool $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Post extends Eloquent
{
	protected $casts = [
		'author_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'author_id',
		'title',
		'body',
		'featured_image',
		'slug',
		'active'
	];
}
