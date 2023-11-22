<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('plot_id')->nullable();
            $table->unsignedBigInteger('house_id')->nullable();
            $table->unsignedBigInteger('cattle_id')->nullable();
            
            $table->foreign('order_id', 'details_ibfk_1')->references('id')->on('orders');
            $table->foreign('plot_id', 'details_ibfk_2')->references('id')->on('plots');
            $table->foreign('house_id', 'details_ibfk_3')->references('id')->on('houses');
            $table->foreign('cattle_id', 'details_ibfk_4')->references('id')->on('cattles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
