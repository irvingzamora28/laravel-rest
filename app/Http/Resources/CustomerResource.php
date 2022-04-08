<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->trashed()) {
            return [
                'status'        => 204,
                'message'       => 'Customer deleted',
                'success'       => true
            ];
        } else {
            return [
                'name'          => $this->name,
                'last_name'     => $this->last_name,
                'address'       => $this->address,
                'description'   => $this->region->description . ' ' . $this->commune->description,
                'success'       => true
            ];
        }
    }

   
}
