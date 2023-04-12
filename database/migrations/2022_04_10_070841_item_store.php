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
       Schema::create('item_store', function (Blueprint $table) {
           $table->foreignId('item_id')->constrained('items')->onUpdate('cascade')->onDelete('cascade');
           $table->foreignId('store_id')->constrained('stores')->onUpdate('cascade')->onDelete('cascade');
           //$table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
           $table->bigInteger('price');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
