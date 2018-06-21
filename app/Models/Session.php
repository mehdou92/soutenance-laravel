<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Jun 2018 18:14:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Session
 * 
 * @property string $id
 * @property int $user_id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $payload
 * @property int $last_activity
 *
 * @package App\Models
 */
class Session extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'last_activity' => 'int'
	];

	protected $fillable = [
		'user_id',
		'ip_address',
		'user_agent',
		'payload',
		'last_activity'
	];
}
