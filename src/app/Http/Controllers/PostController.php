<?php
/**
 * Created by IntelliJ IDEA.
 * User: masayuki
 * Date: 11/09/2016
 * Time: 3:56 AM
 */

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function show($postId)
    {
        $post = Post::find($postId);
        return view('posts.show')
            ->with('post', $post);
    }
}
