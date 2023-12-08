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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_kasir')->nullable();
            $table->foreign('id_kasir')
                ->references('id')
                ->on('kasir')
                ->onDelete('SET NULL')
                ->onUpdate('SET NULL');

            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->foreign('id_pelanggan')
                ->references('id')
                ->on('pelanggan')
                ->onDelete('SET NULL')
                ->onUpdate('SET NULL');

            $table->integer('kembalian');
            $table->string('tipe_pembayaran');
            $table->date('tanggal');
            $table->integer('uang_di_bayar');
            $table->integer('jumlah_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
