<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $person_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birthdate
 * @property string $gender
 * @property string $mobile_number
 * @property string $email_address
 * @property string $province
 * @property string|null $accuser
 * @property string|null $complainant
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'persons';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int',
		'birthdate' => 'datetime'
	];

	protected $fillable = [
		'person_id',
		'first_name',
		'last_name',
		'birthdate',
		'gender',
		'mobile_number',
		'email_address',
		'province',
		'accuser',
		'complainant'
	];
}
