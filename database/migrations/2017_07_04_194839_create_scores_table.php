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

            $table->foreign('vendid')->references('id')->on('vendor');
            $table->integer('itemid')->unsigned();

            $table->foreign('itemid')->references('id')->on('item');
            $table->integer('biztypeid')->unsigned();

            $table->foreign('biztypeid')->references('id')->on('biztype');
            $table->integer('farmtypeid')->unsigned();

            $table->foreign('farmtypeid')->references('id')->on('farmtype');
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
