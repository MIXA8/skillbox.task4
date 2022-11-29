<?php

namespace App\Service;

use TCG\Voyager\Models\Post;

class PostService extends BaseService
{
    public function create($request)
    {
        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body,
                'slug' => $request->slug,
                'status' => $request->status,
            ]
        );
    }

    public function edit($request)
    {
        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body,
                'slug' => $request->slug,
                'status' => $request->status,
            ]
        );
    }
}
