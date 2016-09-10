<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MajorCategories extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'major_categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
