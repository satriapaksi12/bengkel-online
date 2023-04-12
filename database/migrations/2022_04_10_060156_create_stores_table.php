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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->time('open');
            $table->time('close');
            $table->string('address');
            $table->string('phone_store');
            // $table->string('kuota_reservasi')->nullable();
            $table->string('status_activation');
            $table->foreignId('id_mitra')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kecamatan')->constrained('kecamatan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('store_image')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('stores');
    }
};
