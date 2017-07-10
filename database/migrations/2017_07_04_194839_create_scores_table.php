<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendid')->unsigned();

            $table->foreign('vendid')->references('id')->on('vendors');
            $table->integer('itemid')->unsigned();

            $table->foreign('itemid')->references('id')->on('items');
            $table->integer('biztypeid')->unsigned();

            $table->foreign('biztypeid')->references('id')->on('biztypes');
            $table->integer('farmtypeid')->unsigned();

            $table->foreign('farmtypeid')->references('id')->on('farmtypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scores');
    }
}
