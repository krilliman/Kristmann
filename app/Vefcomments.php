<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vefcomments extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'post_name', 'comment', 'current_user' , 'current_userPhoto'];
	//

}
