<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Influencer extends Model
{
    use HasFactory;


    public function SocialMediaProfiles(): HasMany
    {
        return $this->hasMany(SocialMediaProfile::class);
    }


}
