<?php

namespace Database\Seeders;

use App\Models\Influencer;
use App\Models\SocialMediaPlatform;
use App\Models\SocialMediaProfile;
use Illuminate\Database\Seeder;

class SocialMediaProfileSeeder extends Seeder
{
    public function run(): void
    {

        Influencer::factory(10)
            ->has(SocialMediaProfile::factory())
            ->create();

    }
}
