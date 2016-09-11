<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MinorCategory extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'minor_categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name', 'major_category_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function posts(){
		return $this->belongsToMany('App\Post', 'posts_categories', 'minor_category_id');
	}

}
