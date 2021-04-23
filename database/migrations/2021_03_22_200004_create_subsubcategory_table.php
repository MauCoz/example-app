<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsubcategory', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_subcategory_id')->index('fk_subsubcategory_subcategory1_idx');
            $table->string('name')->nullable();
            $table->primary(['id', 'parent_subcategory_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsubcategory');
    }
}
