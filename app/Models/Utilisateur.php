<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Jun 2018 13:53:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Utilisateur
 * 
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $location
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Utilisateur extends Eloquent
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'email',
		'username',
		'password',
		'first_name',
		'last_name',
		'location',
		'remember_token'
	];
}
