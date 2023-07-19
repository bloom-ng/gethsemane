<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(12);
        
        return view('articles',['posts'=>$posts]);
    }

    public function show($slug)
    {
        $post = Post::all()->where('slug','=',$slug)->first();
        $morePosts = $this->getRandomPosts(3);
        
        return view('article',['post'=>$post,'more_posts'=>$morePosts,]);
    }

    public function getRandomPosts(int $number)
    {
        $posts = Post::inRandomOrder()->take($number)->get();
        return $posts;
    }
}
