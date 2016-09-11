<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostCategory;
use App\MinorCategory;
use App\Post;
use Illuminate\Support\Facades\DB;

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
	public static function findBySearchQuery($issuer, $minorCategories, $keywords) {
		if ($minorCategories == null) {
			$minorCategories = [];
		}
		$q = '';
		for ($i = 0; $i < count($keywords); $i++) {
			$keyword = $keywords[$i];
			if ($i > 0) {
				$q .= ' or ';
			}
			$q .= '(';
			$q .= 'title like "%'.$keyword.'%" or ';
			$q .= 'circumstance like "%'.$keyword.'%" or ';
			$q .= 'description like "%'.$keyword.'%"';
			$q .= ')';
		}
		$arr = implode(',',$minorCategories);
		$r = DB::select(DB::raw("SELECT distinct(t1.id) FROM posts AS t1 LEFT JOIN posts_categories AS t2 ON t1.id = t2.post_id WHERE issuer_kind = ".$issuer." AND minor_category_id IN (".$arr.") AND ".$q));

		$ids = [];
		foreach ($r as $res) {
			array_push($ids, $res->id);
		}

		$query = self::query();
		$query->whereIn('id', $ids);
		return $query->get();
	}

}
