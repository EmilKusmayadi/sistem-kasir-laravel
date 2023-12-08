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
        Schema::create('daftar_barang', function (Blueprint $table) {
            $table->id('id');

            $table->bigInteger("id_kategori")->unsigned();
            $table->foreign("id_kategori")
            ->references('id')
                ->on('kategori')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->string('nama_barang');
            $table->string('lokasi_rak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_barang');
    }
};
