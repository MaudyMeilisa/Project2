<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_daftar');
            $table->bigInteger('id_pasien')->unsigned();
            $table->bigInteger('id_poli')->unsigned();
            $table->bigInteger('id_dokter')->unsigned();
            $table->string('nm_dokter');
            $table->string('kasus');
            $table->bigInteger('id_obat')->unsigned();

            //fk kd_pasien
            $table->foreign('id_pasien')->references('id')
            ->on('pasiens')->onUpdate('cascade')
            ->onDelete('cascade');
            //fk kd_poli
            $table->foreign('id_poli')->references('id')
            ->on('polikliniks')->onUpdate('cascade')
            ->onDelete('cascade');
            //fk id_dokter
            $table->foreign('id_dokter')->references('id')
            ->on('dokters')->onUpdate('cascade')
            ->onDelete('cascade');
            //fk kd_obat
            $table->foreign('id_obat')->references('id')
            ->on('obats')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('pendaftarans');
    }
}
