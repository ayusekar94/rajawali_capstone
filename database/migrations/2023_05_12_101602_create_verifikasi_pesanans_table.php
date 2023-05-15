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
            $table->id();
            $table->unsignedBigInteger('id_cart');
            $table->foreign('id_cart')->references('id')->on('carts');
            $table->unsignedBigInteger('id_wisata');
            $table->foreign('id_wisata')->references('id')->on('wisatas');
            $table->string('name');
            $table->timestamp('tanggal');
            $table->boolean('status');
            $table->bigInteger('jumlah');
            $table->bigInteger('jumlah_harga');
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
        Schema::table('verifikasi_pesanans', function (Blueprint $table){
            $table->dropColumn('id_cart');
            $table->dropColumn('id_wisata');
        });
    }
};
