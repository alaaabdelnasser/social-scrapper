<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


/** @see \Influencer */
class InfluencerCollection extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "fullName" => $this->fullName,
            "country" => $this->country,
            "photo" => $this->photo,
            "interests" => $this->interests,
            "socialProfiles" => SocialMediaProfileCollection::collection($this->SocialMediaProfiles),
            "created_at" => $this->created_at->format('d-m-Y : h:i a'),
        ];
    }
}
