<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return new PostResource($post);
    }
}
