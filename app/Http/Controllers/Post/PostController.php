<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreate;
use App\Http\Requests\Post\PostEdit;
use App\Service\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostService $postService,PostCreate $request){
        $postService->store($request);
        return redirect()->back();
    }

    public function update(PostService $postService,PostEdit $request){
        $postService->update($request);
        return redirect()->back();
    }
}
