<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductComponentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_component', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('ean')->index('fk_product_component_product1_idx');
            $table->unsignedBigInteger('contains_product_code')->index('fk_product_component_product2_idx');
            $table->integer('quantity')->nullable();
            $table->primary(['id', 'ean', 'contains_product_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_component');
    }
}
