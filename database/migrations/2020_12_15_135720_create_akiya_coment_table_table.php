<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkiyaComentTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akiya_coment_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tid');
            $table->integer('mid');
            $table->integer('coment');
            $table->datetime('comentUser');
            $table->datetime('indate');
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
        Schema::dropIfExists('akiya_coment_table');
    }
}
