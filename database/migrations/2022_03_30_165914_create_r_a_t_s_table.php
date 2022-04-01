<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRATSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_a_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penugasan');
            $table->string('nama_auditee');
            $table->string('jenis_auditee');
            $table->string('kategori');
            $table->string('supervisi_wakil');
            $table->string('avp');
            $table->string('mgr');
            $table->string('amgr');
            $table->string('persiapan');
            $table->string('perjalanan');
            $table->string('pelaksanaan');
            $table->string('tanggapan');
            $table->string('diskusi');
            $table->string('lha');
            $table->string('total');
            $table->string('mandays');
            $table->string('total_hk');
            $table->string('anggaran_tim_audit_dop');
            $table->string('anggaran_tim_audit_penginapan');
            $table->string('anggaran_tim_audit_transport');
            $table->string('anggaran_tim_audit_pulsa');
            $table->string('sub_total_anggaran_tim_audit');
            $table->string('hari_supervisi');
            $table->string('anggaran_supervisi_dop');
            $table->string('anggaran_supervisi_penginapan');
            $table->string('anggaran_supervisi_transport');
            $table->string('sub_total_anggaran_supervisi');
            $table->string('total_anggaran');
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
        Schema::dropIfExists('r_a_t_s');
    }
}
