<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWarehouseProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse_product', function (Blueprint $table) {
            $table->foreign('ean', 'fk_warehouse_products_product1')->references('ean')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('warehouse_id', 'fk_warehouse_products_warehouse1')->references('id')->on('warehouse')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warehouse_product', function (Blueprint $table) {
            $table->dropForeign('fk_warehouse_products_product1');
            $table->dropForeign('fk_warehouse_products_warehouse1');
        });
    }
}
