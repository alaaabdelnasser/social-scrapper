<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMediaProfile extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    public function SocialMediaPlatform(): BelongsTo
    {
        return $this->belongsTo(SocialMediaPlatform::class);
    }

    public function Influencer(): BelongsTo
    {
        return $this->belongsTo(Influencer::class);
    }


}
