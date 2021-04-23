<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->unsignedBigInteger('ean')->primary();
            $table->string('name')->nullable();
            $table->string('description', 1200)->nullable();
            $table->string('short_description')->nullable();
            $table->string('subtitle', 128)->nullable();
            $table->decimal('base_price', 15)->nullable();
            $table->tinyInteger('visible')->nullable();
            $table->integer('weight')->nullable();
            $table->double('length')->nullable();
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->integer('category_id')->nullable()->index('fk_product_category1_idx');
            $table->integer('subcategory_id')->nullable()->index('fk_product_subcategory1_idx');
            $table->integer('subsubcategory_id')->nullable()->index('fk_product_subsubcategory1_idx');
            $table->bigInteger('bol_id')->nullable();
            $table->string('bol_offer_id_nl', 45)->nullable();
            $table->string('bol_offer_id_be', 45)->nullable();
            $table->string('bol_calculated_price_nl', 45)->nullable();
            $table->string('bol_calculated_price_be', 45)->nullable();
            $table->string('bol_calculated_gross_price_nl', 45)->nullable();
            $table->string('bol_calculated_gross_price_be', 45)->nullable();
            $table->string('bol_multiplier_nl', 45)->nullable();
            $table->string('bol_multiplier_be', 45)->nullable();
            $table->string('bol_stock_amount_nl', 45)->nullable();
            $table->string('bol_stock_amount_be', 45)->nullable();
            $table->string('bol_seller_warehouse', 45)->nullable();
            $table->tinyInteger('listed_bol')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
