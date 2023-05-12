<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id('wisata_id');
            $table->foreignId('category_id');
<<<<<<< HEAD
            $table->foreign('category_id')->references('category_id')->on('categories');
=======
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
>>>>>>> e2456f2e15597fe7471fddd44aeda0ec12198a30
            $table->string('image');
            $table->string('name');
            $table->string('description');
            $table->string('rating');
            $table->bigInteger('price');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
};
