<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BrunnerOnStage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gos_brunnerOnStage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centertext');
            $table->string('righttext');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gos_brunnerOnStage', function (Blueprint $table) {
            //
        });
    }
}
