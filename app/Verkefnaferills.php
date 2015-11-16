<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Verkefnaferills extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'post_id', 'post_title', 'post_user'];
	//

}
