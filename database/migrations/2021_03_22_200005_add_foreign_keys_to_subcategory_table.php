<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategory', function (Blueprint $table) {
            $table->foreign('parent_category_id', 'fk_subcategory_category1')->references('id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcategory', function (Blueprint $table) {
            $table->dropForeign('fk_subcategory_category1');
        });
    }
}
