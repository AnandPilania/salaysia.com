<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Course
 * 
 * @property int $id
 * @property int $user_id
 * @property int $univ_id
 * @property string $title
 * @property string $course_slug
 * @property string $description
 * @property string $specialreq
 * @property string $subjects
 * @property string $location
 * @property string $accreditation
 * @property string $type
 * @property string $level
 * @property string $fees
 * @property string $feescycle
 * @property string $start_from
 * @property string $category
 * @property string $duration
 * @property int $featured_listing
 * @property string $featured_image
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Course extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'univ_id' => 'int',
		'featured_listing' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'univ_id',
		'title',
		'course_slug',
		'description',
		'specialreq',
		'subjects',
		'location',
		'accreditation',
		'type',
		'level',
		'fees',
		'feescycle',
		'start_from',
		'category',
		'duration',
		'featured_listing',
		'featured_image',
		'status'
	];
}
