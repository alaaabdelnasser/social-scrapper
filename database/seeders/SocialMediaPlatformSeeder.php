<?php

namespace Database\Seeders;

use App\Models\SocialMediaPlatform;
use Illuminate\Database\Seeder;

class SocialMediaPlatformSeeder extends Seeder
{
    public function run(): void
    {

        SocialMediaPlatform::insert([
                [
                    'domain' => 'facebook.com',
                    'name' => 'facebook',
                ],
                [
                    'domain' => 'twitter.com',
                    'name' => 'twitter',
                ],
                [
                    'domain' => 'instagram.com',
                    'name' => 'instagram',
                ],
                [
                    'domain' => 'youtube.com',
                    'name' => 'youtube',
                ],
                [
                    'domain' => 'snapchat.com',
                    'name' => 'snapchat',
                ],
                [
                    'domain' => 'tiktok.com',
                    'name' => 'tiktok',
                ]

            ]

        );

    }
}
