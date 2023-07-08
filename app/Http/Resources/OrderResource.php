<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'total_price' => $this->total_price,
            'user_name' => $this->user->name,
            'orderitem' => OrderItemResource::collection($this->order_items),
        ];

    }
}
