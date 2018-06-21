<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 21 Jun 2018 18:14:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Tag extends Eloquent
{
	protected $fillable = [
		'name'
	];
}
