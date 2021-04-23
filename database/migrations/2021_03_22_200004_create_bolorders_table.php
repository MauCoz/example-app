<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolorders', function (Blueprint $table) {
            $table->integer('order_item_id');
            $table->integer('order_id')->nullable();
            $table->unsignedBigInteger('product_ean')->index('fk_bolorders_product1_idx');
            $table->integer('amount_ordered')->nullable();
            $table->decimal('profit', 15)->nullable();
            $table->tinyInteger('cancelrequest')->nullable()->default(0);
            $table->string('track_and_trace', 50)->nullable();
            $table->string('status', 25)->nullable();
            $table->integer('warehouse_id')->index('fk_bolorders_warehouse1_idx');
            $table->string('country', 5)->nullable();
            $table->dateTime('creation_date')->nullable();
            $table->longText('order_details')->nullable();
            $table->string('delivery_id', 20)->nullable();
            $table->primary(['order_item_id', 'product_ean']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolorders');
    }
}
