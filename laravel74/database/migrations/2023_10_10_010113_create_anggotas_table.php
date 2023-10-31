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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->integer('id_anggota');
            $table->primary('id_anggota');
            $table->string('kode_anggota');
            $table->string('nama_anggota');
            $table->char('jk_anggota');
            $table->string('jurusan_anggota');
            $table->string('no_telp_anggota');
            $table->string('alamat_anggota');
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
        Schema::dropIfExists('anggotas');
    }
};
