<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detail
 * 
 * @property int $id
 * @property int|null $order_id
 * @property int|null $plot_id
 * @property int|null $house_id
 * @property int|null $cattle_id
 * 
 * @property Order|null $order
 * @property Plot|null $plot
 * @property House|null $house
 * @property Cattle|null $cattle
 *
 * @package App\Models
 */
class Detail extends Model
{
	protected $table = 'details';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'plot_id' => 'int',
		'house_id' => 'int',
		'cattle_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'plot_id',
		'house_id',
		'cattle_id'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
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
