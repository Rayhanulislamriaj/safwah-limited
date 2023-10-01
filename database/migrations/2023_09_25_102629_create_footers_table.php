<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->string('desginer');
            $table->string('facebook');
            $table->string('facebook_link');
            $table->string('website');
            $table->string('website_link');
            $table->string('youtube');
            $table->string('youtube_link');
            $table->string('instagram');
            $table->string('instagram_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};