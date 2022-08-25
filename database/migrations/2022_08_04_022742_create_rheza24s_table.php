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
        Schema::create('rheza24s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            // $table->string('kelas');
            // $table->string('tmptLahir');
            $table->string('tglLahir');
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
        Schema::dropIfExists('rheza24s');
    }
};
