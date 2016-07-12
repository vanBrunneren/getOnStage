<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gos_homesite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centertext');
            $table->string('righttext');
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
        Schema::table('gos_homesite', function (Blueprint $table) {
            //
        });
    }
}
