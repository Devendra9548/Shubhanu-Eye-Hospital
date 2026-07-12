<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('thumb1')->nullable();
            $table->string('video1')->nullable();
            $table->string('thumb2')->nullable();
            $table->string('video2')->nullable();
            $table->string('thumb3')->nullable();
            $table->string('video3')->nullable();
            $table->string('thumb4')->nullable();
            $table->string('video4')->nullable();
            $table->string('thumb5')->nullable();
            $table->string('video5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_testimonials');
    }
};
