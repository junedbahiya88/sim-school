<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekanans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rekanan');
            $table->string('nama_rekanan')->nullable();
            $table->string('pic')->nullable();
            $table->string('pic_finance')->nullable();
            $table->text('alamat')->nullable();
            $table->string('npwp')->nullable();
            $table->string('telp')->nullable();
            $table->string('fax')->nullable();
            $table->string('no_pajak')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->string('email')->nullable();
            $table->decimal('pph')->nullable();
            $table->integer('jt')->nullable();
            $table->integer('is_pkp')->nullable();
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
        Schema::dropIfExists('rekanans');
    }
}