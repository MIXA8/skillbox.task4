<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreate;
use App\Service\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(PostService $postService,PostCreate $request){
        $postService->create($request);
    }
}
