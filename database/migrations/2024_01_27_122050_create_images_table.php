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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //Lav foreign key
            // $table->unsignedBigInteger('album_id')->default(1); //Table findes ikke endnu -- dernæst Lav foreign key
            $table->string('name');
            $table->string('extension');
            $table->string('name_extension');
            $table->string('filesize');
            $table->string('dimensions');
            $table->string('title');
            $table->string('caption');
            $table->string('alt_text');
            $table->unsignedBigInteger('last_updated_by_user');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
