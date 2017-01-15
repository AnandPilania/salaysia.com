<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 28 Dec 2016 18:48:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ranking
 * 
 * @property int $id
 * @property int $rank_id
 * @property int $rank_min
 * @property int $rank_max
 * @property string $title
 * @property string $slug
 *
 * @package App\Models
 */
class Ranking extends Eloquent
{
	protected $table = 'ranking';
	public $timestamps = false;

	protected $casts = [
		'rank_id' => 'int',
		'rank_min' => 'int',
		'rank_max' => 'int'
	];

	protected $fillable = [
		'rank_id',
		'rank_min',
		'rank_max',
		'title',
		'slug'
	];
}
