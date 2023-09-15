<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('social_media_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_media_platforms');
    }
};
