<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodchartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodcharts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->string('bhaji1');
            $table->string('bhaji2');
            $table->string('rice');
            $table->string('salate');
            $table->string('sweet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodcharts');
    }
}
