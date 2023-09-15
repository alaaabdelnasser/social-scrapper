<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Influencer;

class InfluencerFactory extends Factory
{
    protected $model = Influencer::class;

    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name,
            'country' => $this->faker->countryCode,
            'photo' => $this->faker->imageUrl,
            'interests' => $this->faker->word() . ',' . $this->faker->word() . ',' . $this->faker->word(),
        ];
    }

}
