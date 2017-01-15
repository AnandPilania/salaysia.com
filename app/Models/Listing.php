<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Listing
 * 
 * @property int $id
 * @property int $user_id
 * @property int $cat_id
 * @property int $sub_cat_id
 * @property int $location_id
 * @property int $featured_listing
 * @property string $title
 * @property string $listing_slug
 * @property string $description
 * @property string $welcome_content
 * @property string $campus_content
 * @property string $academic_content
 * @property string $research_content
 * @property string $admissions_content
 * @property string $facilities_content
 * @property string $accommodation_content
 * @property string $level
 * @property string $specialization
 * @property string $keyword
 * @property string $video
 * @property string $video2
 * @property string $video3
 * @property string $address
 * @property string $contact_details
 * @property string $country
 * @property string $city
 * @property string $scolarship
 * @property string $ranktype
 * @property string $ranking
 * @property string $map_lat
 * @property string $map_long
 * @property string $amenities
 * @property string $featured_image
 * @property string $review_avg
 * @property int $view_count
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Listing extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'cat_id' => 'int',
		'sub_cat_id' => 'int',
		'location_id' => 'int',
		'featured_listing' => 'int',
		'view_count' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'cat_id',
		'sub_cat_id',
		'location_id',
		'featured_listing',
		'title',
		'listing_slug',
		'description',
		'welcome_content',
		'campus_content',
		'academic_content',
		'research_content',
		'admissions_content',
		'facilities_content',
		'accommodation_content',
		'level',
		'specialization',
		'keyword',
		'video',
		'video2',
		'video3',
		'address',
		'contact_details',
		'country',
		'city',
		'scolarship',
		'ranktype',
		'ranking',
		'map_lat',
		'map_long',
		'amenities',
		'featured_image',
		'review_avg',
		'view_count',
		'status'
	];
}
