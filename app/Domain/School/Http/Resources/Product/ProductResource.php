<?php

namespace App\Domain\School\Http\Resources\Product;

use App\Domain\School\Http\Resources\Room\RoomResource;
use Illuminate\Http\Request;
use App\Infrastructure\Http\AbstractResources\BaseResource as JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function data(Request $request):array
    {
        return [
            'id'               => $this->id,
            'room_id'          => $this->room_id,
            'name'             => $this->name,
            'description'      => $this->description,
            'price'            => number_format($this->price/10,2),
            'room'             => new RoomResource($this->room)
        ];
    }
}
