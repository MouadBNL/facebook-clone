<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'type' => $this->type,
            'original_post' => new PostResource($this->originalPost),
            'likes_count' => $this->likes->count(),
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at
        ];
    }
}
