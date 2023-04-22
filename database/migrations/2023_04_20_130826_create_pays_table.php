<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pays', function (Blueprint $table) {
            Schema::create('pays', function (Blueprint $table) {
                $table->increments('id');
            $table->string('payment_amount');
            $table->integer('number_ticket');
            $table->string('date_use');
            $table->string('infomation_use');
            $table->string('phone');
            $table->string('email');
            $table->string('number_card');
            $table->string('name_card');
            $table->string('expiry_card');
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
        Schema::dropIfExists('pays');
    }
}
