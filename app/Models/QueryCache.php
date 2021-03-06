<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer                                  id
 * @property string                                   query
 * @property json				      data
 * @property \Carbon\Carbon                           created_at
 * @property \Carbon\Carbon                           update_at
 */
class QueryCache extends Model{
	public $table = "query_cache";
}
