<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RankType
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 *
 * @package App\Models
 */
class RankType extends Eloquent
{
	protected $table = 'rank_type';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'slug'
	];
}
