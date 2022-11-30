<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostCreate;
use App\Http\Requests\Post\PostEdit;
use App\Service\MarkdownConverterService;
use App\Service\PostService;

class PostController extends Controller
{
    public function store(PostService $postService, PostCreate $request)
    {
        if ($request->markdown != null) {
            $markdown = new MarkdownConverterService();
            $request->body = $markdown->convertHtml($request->body);
            dd($request);
        }
        $postService->store($request);
        return redirect()->back();
    }

    public function update(PostService $postService, PostEdit $request)
    {
        if ($request->markdown != null) {
            $markdown = new MarkdownConverterService();
            $request->body = $markdown->convertHtml($request->markdown);
        }
        $postService->update($request);
        return redirect()->back();
    }
}
