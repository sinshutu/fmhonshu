<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

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
	protected $fillable = ['id', 'issuer_kind', 'title', 'circumstance', 'description', 'updated_at', 'created_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function minorCategories(){
		return $this->belongsToMany('minor_category');
	}

	/**
	 * カテゴリとフリーワードで検索する
	 * @param $minorCategories array
	 * @param $keywords array
	 */
	public static function findBySearchQuery($minorCategories, $keywords) {
		$query = self::query();
		foreach ($keywords as $keyword) {
			$query->where('title', 'like', '%'.$keyword.'%');
			$query->orWhere('circumstance', 'like', '%'.$keyword.'%');
			$query->orWhere('description', 'like', '%'.$keyword.'%');
		}
		return $query->get();
	}

}
