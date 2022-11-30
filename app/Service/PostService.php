<?php

namespace App\Service;

use TCG\Voyager\Models\Post;

class PostService extends BaseService
{
    public function store($request)
    {
        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body,
                'slug' => $request->slug,
                'featured' => $request->status,
            ]
        );
    }

    public function update($request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->featured = $request->status;
        $post->save();
    }
}
