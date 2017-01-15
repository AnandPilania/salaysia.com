<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Setting
 * 
 * @property int $id
 * @property string $site_name
 * @property string $site_email
 * @property string $site_logo
 * @property string $site_favicon
 * @property string $site_keywords
 * @property string $site_description
 * @property string $google_map_api
 * @property string $site_header_code
 * @property string $site_footer_code
 * @property string $site_copyright
 * @property string $addthis_share_code
 * @property string $disqus_comment_code
 * @property string $facebook_comment_code
 * @property string $home_slide_image1
 * @property string $home_slide_image2
 * @property string $home_slide_image3
 * @property string $home_slide_image4
 * @property string $home_slide_image5
 * @property string $home_slide_title
 * @property string $home_slide_text
 * @property string $page_bg_image
 * @property string $about_title
 * @property string $about_description
 * @property string $contact_title
 * @property string $contact_address
 * @property string $contact_email
 * @property string $contact_number
 * @property string $contact_lat
 * @property string $contact_long
 * @property string $terms_of_title
 * @property string $terms_of_description
 * @property string $privacy_policy_title
 * @property string $privacy_policy_description
 * @property string $service_title
 * @property string $service_description
 * @property string $facebook_url
 * @property string $twitter_url
 * @property string $gplus_url
 * @property string $linkedin_url
 *
 * @package App\Models
 */
class Setting extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'site_name',
		'site_email',
		'site_logo',
		'site_favicon',
		'site_keywords',
		'site_description',
		'google_map_api',
		'site_header_code',
		'site_footer_code',
		'site_copyright',
		'addthis_share_code',
		'disqus_comment_code',
		'facebook_comment_code',
		'home_slide_image1',
		'home_slide_image2',
		'home_slide_image3',
		'home_slide_image4',
		'home_slide_image5',
		'home_slide_title',
		'home_slide_text',
		'page_bg_image',
		'about_title',
		'about_description',
		'contact_title',
		'contact_address',
		'contact_email',
		'contact_number',
		'contact_lat',
		'contact_long',
		'terms_of_title',
		'terms_of_description',
		'privacy_policy_title',
		'privacy_policy_description',
		'service_title',
		'service_description',
		'facebook_url',
		'twitter_url',
		'gplus_url',
		'linkedin_url'
	];
}
