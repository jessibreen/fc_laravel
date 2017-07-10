<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distid')->unsigned();

            $table->foreign('distid')->references('id')->on('distributors');
            $table->date('invoice_date');
            $table->integer('vendid')->unsigned();

            $table->foreign('vendid')->references('id')->on('vendors');
            $table->integer('brandid')->unsigned()->nullable();

            $table->foreign('brandid')->references('id')->on('brands');
            $table->integer('itemid')->unsigned();

            $table->foreign('itemid')->references('id')->on('items');
            $table->boolean('kyp')->nullable;
            $table->decimal('cost')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
