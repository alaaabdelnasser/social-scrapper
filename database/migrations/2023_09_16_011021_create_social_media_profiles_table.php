<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('social_media_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('social_media_platform_id');
            $table->unsignedBigInteger('influencer_id');
            $table->bigInteger('followers');
            $table->bigInteger('following');

            $table->foreign('social_media_platform_id')
                ->references('id')
                ->on('social_media_platforms')->cascadeOnDelete();

            $table->foreign('influencer_id')
                ->references('id')
                ->on('influencers')->cascadeOnDelete();;


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_media_profiles');
    }
};
