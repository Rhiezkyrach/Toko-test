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
        Schema::create('pembeli', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_pembeli', 20);
            $table->string('total_belanja', 20);
            $table->string('dibayar', 20);
            $table->string('kembalian', 20);
            $table->string('kode_pembelian', 20);
            $table->string('total', 20);
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
        Schema::dropIfExists('pembeli');
    }
};
