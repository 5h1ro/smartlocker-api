<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Resi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resi', function (Blueprint $table) {
            $table->increments('no');
            $table->string('noresi', 50);
            $table->string('kurir', 50)->nullable();
            $table->string('marketplace', 50)->nullable();
            $table->string('isi', 100)->nullable();
            $table->datetime('tanggal_input')->nullable();
            $table->datetime('tanggal_scan')->nullable();
            $table->integer('status')->default(0);
            $table->integer('aktif')->default(1);
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
        Schema::dropIfExists('users');
    }
};
