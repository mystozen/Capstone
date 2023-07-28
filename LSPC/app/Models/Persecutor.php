<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persecutor
 * 
 * @property int $persecutor_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birthdate
 * @property string $gender
 * @property string $mobile_number
 * @property string $email_address
 * @property string $position
 *
 * @package App\Models
 */
class Persecutor extends Model
{
	protected $table = 'persecutors';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'persecutor_id' => 'int',
		'birthdate' => 'datetime'
	];

	protected $fillable = [
		'persecutor_id',
		'first_name',
		'last_name',
		'birthdate',
		'gender',
		'mobile_number',
		'email_address',
		'position'
	];
}
