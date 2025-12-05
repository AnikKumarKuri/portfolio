<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('name')->default('Your Name');
            $table->string('title')->default('Laravel Developer');
            $table->string('subtitle')->nullable(); // short hero line
            $table->text('about')->nullable();

            $table->string('profile_image')->nullable(); // optional future use
            $table->string('cv_link')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();

            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
