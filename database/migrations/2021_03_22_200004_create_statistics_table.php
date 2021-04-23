<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('hour', 45)->nullable();
            $table->string('date', 45)->nullable();
            $table->string('request1', 45)->nullable();
            $table->string('request2', 45)->nullable();
            $table->string('request3', 45)->nullable();
            $table->string('request4', 45)->nullable();
            $table->string('received_orders', 45)->nullable();
            $table->string('sent_orders', 45)->nullable();
            $table->string('bol_average_buybox_nl', 45)->nullable();
            $table->string('bol_average_buybox_be', 45)->nullable();
            $table->string('bol_products_sent_nl', 45)->nullable();
            $table->string('bol_products_sent_be', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
