<?php
/**
 * Created by IntelliJ IDEA.
 * User: masayuki
 * Date: 11/09/2016
 * Time: 3:56 AM
 */

namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Post;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function search(Request $request) {
        $categories = $request->categories;
        $keywords = $request->keywords;
        $posts = Post::findBySearchQuery($categories, $keywords);
        return view('search', $posts);
    }
}