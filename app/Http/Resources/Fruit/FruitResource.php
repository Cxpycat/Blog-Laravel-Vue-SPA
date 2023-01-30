<?php

namespace App\Http\Resources\Fruit;

use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Finder\name;

class FruitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}
