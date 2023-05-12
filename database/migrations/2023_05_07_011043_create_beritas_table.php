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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('berita_id');
            $table->foreignId('wisata_id');
            $table->foreign('wisata_id')->references('wisata_id')->on('wisatas');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->string('name');
            $table->string('image');
            $table->string('description');
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
        Schema::dropIfExists('beritas');
    }
};
