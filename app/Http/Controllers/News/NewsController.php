<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at", "desc")->where('featured',1)->paginate(5);
        return view('news.index',compact('posts'));
    }

    public function application(Request $request,$slug){
        $post=Post::where('slug',$slug)->first();
        return view('news.application',compact('post'));
    }
}
