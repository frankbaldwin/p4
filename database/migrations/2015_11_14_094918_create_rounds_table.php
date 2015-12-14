<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rounds', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->date('date_played');
          $table->string('course_name', 255);
          $table->decimal('course_rating',5,2);
          $table->integer('slope_rating');
          $table->integer('round_score');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rounds');
    }
}
