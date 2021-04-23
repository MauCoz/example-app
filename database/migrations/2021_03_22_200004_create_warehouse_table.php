<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->integer('priority')->nullable()->unique('priority_UNIQUE');
            $table->tinyInteger('accepting_orders')->nullable();
            $table->tinyInteger('counts_general_inventory')->nullable();
            $table->decimal('minimum_purchase_price', 15)->nullable();
            $table->string('alias', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse');
    }
}
