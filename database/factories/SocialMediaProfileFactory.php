<?php

namespace Database\Factories;

use App\Models\SocialMediaProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaProfileFactory extends Factory
{
    protected $model = SocialMediaProfile::class;

    public function definition(): array
    {
        return [
            'social_media_platform_id' => $this->faker->numberBetween(1, 6),
            'followers' => $this->faker->numberBetween(2000, 1000000),
            'user_name' => $this->faker->userName(),
            'following' => $this->faker->numberBetween(2000, 1000000),
        ];
    }
}
