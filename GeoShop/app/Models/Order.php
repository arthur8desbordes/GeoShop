<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $buyer_id
 * @property int $seller_id
 * 
 * @property User $user
 * @property Collection|Detail[] $details
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $timestamps = false;

	protected $casts = [
		'buyer_id' => 'int',
		'seller_id' => 'int'
	];

	protected $fillable = [
		'buyer_id',
		'seller_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'seller_id');
	}

	public function details()
	{
		return $this->hasMany(Detail::class);
	}
}
