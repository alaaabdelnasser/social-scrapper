<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('======== Inserting Social Media Platforms Data ========');
        $this->call(SocialMediaPlatformSeeder::class);

        $this->command->info('======== Inserting Influencers Profiles Data ========');
        $this->call( SocialMediaProfileSeeder::class);


    }
}
