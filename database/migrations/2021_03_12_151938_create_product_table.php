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
            $table->integer('id', true);
            $table->string('productCode', 13);
            $table->string('name');
            $table->string('description', 1000);
            $table->string('barcode', 13);
            $table->integer('weight');
            $table->integer('width');
            $table->integer('depth');
            $table->tinyInteger('isShownInPortal');
            $table->decimal('costPrice', 10);
            $table->string('subtitle')->nullable();
            $table->string('Stock', 10000);
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
