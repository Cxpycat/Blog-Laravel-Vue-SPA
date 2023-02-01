<?php

namespace App\Http\Resources\Post;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'category_id' => $this->category_id,
            'category_name' => Category::where('id', $this->category_id)->first('title'),
            'created_at' => Carbon::parse($this->created_at)->format('d.m.y - H:i'),
            'size' => Storage::disk('public')->size(str_replace('http://127.0.0.1:8000/storage/', '', $this->image)),
        ];
    }
}