<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkiyaTweetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akiya_tweet_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mid');
            $table->string('tweet');
            $table->string('name');
            $table->string('tweetNumber');
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
        Schema::dropIfExists('akiya_tweet_table');
    }
}
