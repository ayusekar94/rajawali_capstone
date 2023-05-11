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
        Schema::create('verifikasi_pesanans', function (Blueprint $table) {
            $table->id('verifikasi_id');
            $table->string('name');
            $table->timestamp('tanggal');
            $table->boolean('status');
            $table->bigInteger('jumlah');
            $table->bigInteger('price');
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
        Schema::dropIfExists('verifikasi_pesanans');
    }
};
