<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock', function (Blueprint $table) {
            $table->foreign('btwId', 'stock_ibfk_1')->references('id')->on('btw')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('productId', 'stock_ibfk_2')->references('id')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('warehouseId', 'stock_ibfk_3')->references('id')->on('warehouse')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock', function (Blueprint $table) {
            $table->dropForeign('stock_ibfk_1');
            $table->dropForeign('stock_ibfk_2');
            $table->dropForeign('stock_ibfk_3');
        });
    }
}
