<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CrimeCharge
 * 
 * @property int $ccrime_id
 * @property string|null $classification
 * @property string|null $crime_charge
 *
 * @package App\Models
 */
class CrimeCharge extends Model
{
	protected $table = 'crime_charges';
	protected $primaryKey = 'crime_id';
	public $timestamps = false;

	protected $fillable = [
		'classification',
		'crime_charge'
	];
}
