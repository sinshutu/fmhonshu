<?php
/**
 * Created by IntelliJ IDEA.
 * User: masayuki
 * Date: 11/09/2016
 * Time: 3:56 AM
 */

namespace App\Http\Controllers;

use App\Post;
use App\MinorCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = MinorCategory::all();
        return view('index')->with("categories", $categories);
    }

    public function search(Request $request) {
        $issuerKind = $request->issuer;
        $categories = $request->categories;
        $keywords = explode(' ', $request->keywords);
        // 最大10件だけ返す
        $posts = Post::findBySearchQuery($issuerKind, $categories, $keywords)
            ->splice(0,10);

        // 検索結果をフラッシュに保存
        $request->flash();
        return view('search')
            ->with("posts", $posts);
    }
}
