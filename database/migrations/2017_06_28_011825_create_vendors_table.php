<?php

/*use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;*/
use Illuminate\Database\Migrations\Migration;
use Grimzy\LaravelMysqlSpatial\Schema\Blueprint;


class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street')->nullable;
            $table->string('city')->nullable;
            $table->string('state')->nullable;
            $table->string('zipcode')->nullable;
            $table->integer('countyid')->unsigned()->nullable();

            $table->foreign('countyid')->references('id')->on('counties');
            $table->point('location')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
