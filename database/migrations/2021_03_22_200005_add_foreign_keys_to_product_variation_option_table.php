<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductVariationOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_variation_option', function (Blueprint $table) {
            $table->foreign('product_variation_id', 'fk_product_variation_option_product_variation1')->references('id')->on('product_variation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_variation_option', function (Blueprint $table) {
            $table->dropForeign('fk_product_variation_option_product_variation1');
        });
    }
}
