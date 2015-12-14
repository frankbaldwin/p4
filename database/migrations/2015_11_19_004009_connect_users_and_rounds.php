<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndRounds extends Migration
{

    public function up()
    {
        Schema::table('rounds', function(Blueprint $table){

          #Add a new INT field called 'user_id'
          $table->integer('user_id')->unsigned();

          #This field 'user_id' is a foreign key. Conneccts to the 'id' field in the 'users' table
          $table->foreign('user_id')->references('id')->on('users');
        });
      }

    public function down()
    {
        Schema::table('rounds', function (Blueprint $table){

          $table->dropForeign('rounds_user_id_foreign');

          $table->dropColumn('user_id');
        });
    }
}
