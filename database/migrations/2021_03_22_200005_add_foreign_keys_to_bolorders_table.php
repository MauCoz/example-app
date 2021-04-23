<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBolordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bolorders', function (Blueprint $table) {
            $table->foreign('product_ean', 'fk_bolorders_product1')->references('ean')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('warehouse_id', 'fk_bolorders_warehouse1')->references('id')->on('warehouse')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bolorders', function (Blueprint $table) {
            $table->dropForeign('fk_bolorders_product1');
            $table->dropForeign('fk_bolorders_warehouse1');
        });
    }
}
