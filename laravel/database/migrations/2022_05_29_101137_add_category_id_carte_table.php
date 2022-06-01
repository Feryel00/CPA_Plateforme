<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdCarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartes', function (Blueprint $table) {
            //
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categoty_cartes');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartes', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
           $table->dropForeign(['category_id']);
        });
    }
}
