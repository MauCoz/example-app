<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_tag', function (Blueprint $table) {
            $table->foreign('ean', 'fk_product_tag_products')->references('ean')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('tag_id', 'fk_product_tag_tags1')->references('id')->on('tag')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_tag', function (Blueprint $table) {
            $table->dropForeign('fk_product_tag_products');
            $table->dropForeign('fk_product_tag_tags1');
        });
    }
}
