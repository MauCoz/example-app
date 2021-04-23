<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_product_category1')->references('id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('subcategory_id', 'fk_product_subcategory1')->references('id')->on('subcategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('subsubcategory_id', 'fk_product_subsubcategory1')->references('id')->on('subsubcategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('fk_product_category1');
            $table->dropForeign('fk_product_subcategory1');
            $table->dropForeign('fk_product_subsubcategory1');
        });
    }
}
