<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPossession
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $plot_id
 * @property int|null $house_id
 * @property int|null $cattle_id
 * 
 * @property User|null $user
 * @property Plot|null $plot
 * @property House|null $house
 * @property Cattle|null $cattle
 *
 * @package App\Models
 */
class UserPossession extends Model
{
	protected $table = 'user_possession';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'plot_id' => 'int',
		'house_id' => 'int',
		'cattle_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'plot_id',
		'house_id',
		'cattle_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function plot()
	{
		return $this->belongsTo(Plot::class);
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}

	public function cattle()
	{
		return $this->belongsTo(Cattle::class);
	}
}
