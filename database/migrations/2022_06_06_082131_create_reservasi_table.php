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
        // Schema::create('reservasis', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreignId('id_store')->constrained('stores')->onUpdate('cascade')->onDelete('cascade');
        //     $table->time('reservasi_time_start');
        //     $table->time('reservasi_time_end');
        //     $table->date('date');
        //     $table->string('status');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
};
