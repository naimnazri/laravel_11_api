<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'type' => $this->type,
            'description' => $this->description,
            'salary' => $this->salary,
            'location' => $this->location,
            'company_name' => $this->company_name,
            'company_description' => $this->company_description,
            'company_email' => $this->company_email,
            'company_phone' => $this->company_phone,
        ];
    }
}
