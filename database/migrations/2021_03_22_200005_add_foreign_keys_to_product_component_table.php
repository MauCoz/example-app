<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductComponentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_component', function (Blueprint $table) {
            $table->foreign('ean', 'fk_product_component_product1')->references('ean')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contains_product_code', 'fk_product_component_product2')->references('ean')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_component', function (Blueprint $table) {
            $table->dropForeign('fk_product_component_product1');
            $table->dropForeign('fk_product_component_product2');
        });
    }
}
