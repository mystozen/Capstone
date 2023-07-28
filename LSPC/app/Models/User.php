<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $use_id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $department
 * @property string $position
 * @property string $password
 * @property string $conf_password
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'use_id';
	public $timestamps = false;

	protected $hidden = [
		'password',
		'conf_password'
	];

	protected $fillable = [
		'username',
		'name',
		'email',
		'department',
		'position',
		'password',
		'conf_password'
	];
}
