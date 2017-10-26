<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhpa_num');
            $table->foreign('nhpa_num')->references('username')->on('users');
            $table->string('name');
            $table->string('state');
            $table->string('div');
            $table->decimal('ringer_avg');
            $table->integer('tourn_count');
            $table->integer('league_count');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pitchers');
    }
}
