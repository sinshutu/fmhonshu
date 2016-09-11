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
use DB;

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
        $posts = Post::findBySearchQuery($categories, $keywords)
            ->splice(0,10);

        // 検索結果をフラッシュに保存
        $request->flash();
        return view('search')
            ->with("posts", $posts);
    }
    public function db(){
        $r = DB::delete( DB::raw("DELETE FROM posts;") );
        $r = DB::insert( DB::raw("insert into `posts` (issuer_kind, title, circumstance, description, updated_at, created_at)
            values (0, 'コピーするだけじゃないのか', 'ニュースアプリのデザインの変更で、マイページ画面にAと情報を出す機能がすでにあるのですが、それを記事の画面にも出して欲しいといったら簡単には出来ないと言われた。もうあるのだからそれをコピーすればいいだけだと思うのに理解できない', 'Aという情報がユーザ本人に紐づくもので本人のみ閲覧出来るページであるという状況下で表示しているものであると、記事という全てのユーザが閲覧出来る機能に個々のユーザの属性をもたせるということは新しい機能を作るのと同じこととなる。', now(), now());") );

        $r = DB::select( DB::raw("SELECT * FROM posts;") );
        dd($r);
        return view('index')->with("categories", $categories);
    }
}
