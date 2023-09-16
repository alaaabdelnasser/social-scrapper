<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @see \SocialMediaProfile */
class SocialMediaProfileCollection extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "followers" => $this->followers,
            "following" => $this->following,
            "social_media_platform" => new SocialMediaPlatformResource($this->SocialMediaPlatform)
        ];
    }
}
