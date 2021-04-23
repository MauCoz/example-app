<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubsubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subsubcategory', function (Blueprint $table) {
            $table->foreign('parent_subcategory_id', 'fk_subsubcategory_subcategory1')->references('id')->on('subcategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subsubcategory', function (Blueprint $table) {
            $table->dropForeign('fk_subsubcategory_subcategory1');
        });
    }
}
