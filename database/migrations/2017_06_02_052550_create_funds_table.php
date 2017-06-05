<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('funds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');       
            $table->string('number');
            $table->date('setup');
            $table->date('recore');
            $table->string('stage');
            $table->string('type');
            $table->string('currency');
            $table->string('name');
            $table->string('mantype');
            $table->string('trustee');
            $table->string('field',2000);
            $table->string('status');
            $table->string('changetime');
            $table->string('prompt',2000);
            $table->integer('order');
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
        Schema::dropIfExists('funds');
    }
}
