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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('id_detail_transaksi');

            $table->bigInteger("id_transaksi")->unsigned()->nullable();
            $table->foreign("id_transaksi")
            ->references('id')
                ->on('transaksi')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->bigInteger("kode_barang")->unsigned()->nullable();
            $table->foreign("kode_barang")
            ->references('id')
                ->on('daftar_barang')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->integer('jumlah_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
