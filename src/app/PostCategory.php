<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'post_id', 'minor_category_id', 'major_category_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
