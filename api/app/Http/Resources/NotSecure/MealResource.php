<?php

namespace App\Http\Resources\NotSecure;

use App\Http\Resources\ResourceCore;

class MealResource extends ResourceCore
{
    public function toArray($request)
    {
        return [
            "id" => $this["id"] ,
            "name" => $this["name"] ,
            "description" => $this["description"] ,
            "price" => $this["price"] ,
            "price_string" => number_format($this["price"],0,".",",") ,
            "images" => $this["images"] ,
        ];
    }
}
