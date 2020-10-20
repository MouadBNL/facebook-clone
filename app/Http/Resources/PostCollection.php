<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    public $collects =  PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }

    public function with($request)
    {
        return [
            'meta' => [
                'likes' => $this->likes($request)
            ]
        ];
    }

    private function likes($request)
    {
        if(!$user = $request->user())
        {
            return [];
        }
        
        return $user->likes()
                    ->whereIn('post_id',
                    $this->collection->pluck('id')
                )
                ->pluck('post_id')
                ->toArray();
    }
}
