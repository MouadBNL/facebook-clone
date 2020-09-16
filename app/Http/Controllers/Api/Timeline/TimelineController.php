<?php

namespace App\Http\Controllers\Api\Timeline;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $posts = request()->user()
                          ->postsFromFollowing()
                          ->paginate(5);

        return new PostCollection($posts);
    }
}
