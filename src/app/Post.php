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
	public function findBySearchQuery($minorCategories, $keywords) {
		$query = DB::table($this->table);
		$query->where('');
		foreach ($keywords as $keyword) {
			$query->where('title', 'like', $keyword);
		}
		return null;
	}

}
