<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class References extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gos_references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('feedback');
            $table->string('filepath');
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
        Schema::table('gos_references', function (Blueprint $table) {
            //
        });
    }
}
