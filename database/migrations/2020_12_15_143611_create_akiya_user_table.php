<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkiyaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akiya_user_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lid');
            $table->string('lpw');
            $table->string('kanri_flg');
            $table->string('life_flg');
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
        Schema::dropIfExists('akiya_user_table');
    }
}
