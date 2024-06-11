<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'date_of_birth'   => $this->date_of_birth->toDateString(),
            'gender'          => $this->gender,
            'address'         => $this->address,
            'phone_number'    => $this->phone_number,
            'medical_history' => $this->medical_history,
            'created_at'      => $this->created_at->toDateTimeString(),
            'updated_at'      => $this->updated_at->toDateTimeString(),
        ];
    }
}
