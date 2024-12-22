<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShortenedURLResource extends JsonResource
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
          'user_id' => $this->user_id,
          'origin' =>$this->origin,
          'shortened' => route('shortenedurl.show', ['shortenedURL' => $this->shortened]),
          'clicks' => $this->clicks,
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:i:s')
        ];
    }
}
