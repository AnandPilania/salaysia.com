<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $on_post
 * @property int $from_user
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Comment extends Eloquent
{
	protected $casts = [
		'on_post' => 'int',
		'from_user' => 'int'
	];

	protected $fillable = [
		'on_post',
		'from_user',
		'body'
	];
}
