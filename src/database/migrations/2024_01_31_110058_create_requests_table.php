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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('log_type')->default('pageview'); //[pageview, api-call] etc.
            $table->string('route'); //hvilken side har de klikket på
            $table->text('useragent'); //device brugeren bruger
            $table->string('visitor_id'); //hashed 
            $table->string('referer'); //hvilken side kommer brugeren fra 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
