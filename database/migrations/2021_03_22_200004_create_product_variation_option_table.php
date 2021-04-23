<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variation_option', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_variation_id')->index('fk_product_variation_option_product_variation1_idx');
            $table->string('variation_name')->nullable();
            $table->string('variation_image')->nullable();
            $table->primary(['id', 'product_variation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variation_option');
    }
}
