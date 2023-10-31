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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->integer('id_pengembalian');
            $table->primary('id_pengembalian');
            $table->date('tanggal_pengembalian');
            $table->integer('denda');
            $table->integer('id_buku');
            $table->integer('id_anggota');
            $table->integer('id_petugas');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas');
            $table->foreign('id_buku')->references('id_buku')->on('bukus');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
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
        Schema::dropIfExists('pengembalians');
    }
};
