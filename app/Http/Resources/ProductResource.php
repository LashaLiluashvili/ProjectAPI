<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        // Data is saparated and returned. 

        return  [
            'id' => $this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'term'=>$this->term,
            'description'=>$this->description,
            'created_at'=>$this->created_at->toDateTimeString()
        ];
    }
}
