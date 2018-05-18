<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('phones',function(Blueprint $table){
          $table->increments('id');
          $table->string('phones')->unique();
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users');
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
        //
        schema::dropIfExists('phones');
    }
}
