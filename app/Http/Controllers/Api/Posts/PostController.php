<?php

namespace App\Http\Controllers\Api\Posts;

use App\Events\Posts\PostWasCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $data = $this->validateRequest();
        $post = request()->user()->posts()->create($data);

        broadcast(new PostWasCreated($post));
        //return new PostResource($post);
    }

    protected function validateRequest() {
        return request()->validate([
            'body' => 'max:1000|required|string'
        ]);
    }
}
