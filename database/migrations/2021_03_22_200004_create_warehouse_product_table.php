<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_product', function (Blueprint $table) {
            $table->integer('warehouse_id');
            $table->unsignedBigInteger('ean')->index('fk_warehouse_products_product1_idx');
            $table->string('product_title', 45)->nullable();
            $table->decimal('divergent_product_price', 15)->nullable();
            $table->integer('stock')->nullable();
            $table->integer('available_stock')->nullable();
            $table->char('shipping_country', 2)->nullable();
            $table->decimal('divergent_shipping_price', 15)->nullable();
            $table->string('sku', 45)->nullable();
            $table->string('purchase_price', 45)->nullable();
            $table->primary(['warehouse_id', 'ean']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse_product');
    }
}
