<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPossessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_possession', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plot_id')->nullable();
            $table->unsignedBigInteger('house_id')->nullable();
            $table->unsignedBigInteger('cattle_id')->nullable();
            
            $table->foreign('user_id', 'user_possession_ibfk_1')->references('id')->on('users');
            $table->foreign('plot_id', 'user_possession_ibfk_2')->references('id')->on('plots');
            $table->foreign('house_id', 'user_possession_ibfk_3')->references('id')->on('houses');
            $table->foreign('cattle_id', 'user_possession_ibfk_4')->references('id')->on('cattles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_possession');
    }
}
