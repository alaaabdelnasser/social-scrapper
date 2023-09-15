<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InfluencerSeeder extends Seeder
{
    public function run(): void
    {
     \App\Models\Influencer::factory(10)->create();
    }
}
