<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cattle
 * 
 * @property int $id
 * 
 * @property Collection|Detail[] $details
 * @property Collection|UserPossession[] $user_possessions
 *
 * @package App\Models
 */
class Cattle extends Model
{
	protected $table = 'cattles';
	public $timestamps = false;

	public function details()
	{
		return $this->hasMany(Detail::class);
	}

	public function user_possessions()
	{
		return $this->hasMany(UserPossession::class);
	}
}
