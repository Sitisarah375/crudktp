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
        Schema::create('ktp', function (Blueprint $table) {
                $table->id();
                $table->char('nik')->unique();
                $table->string('nama');
                $table->date('ttl');
                $table->string('jk');
                $table->string('alamat');
                $table->string('rt/rw');
                $table->string('desa');
                $table->string('kecamatan');
                $table->string('agama');
                $table->string('status');
                $table->string('pekerjaan');
                $table->string('kewarganegaraan');
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
        Schema::dropIfExists('ktp');
    }
};
