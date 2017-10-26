<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td', function (Blueprint $table) {
            $table->increments('id_td');
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('phone1',12);
            $table->string('phone2',12);
            $table->string('email', 255);
            $table->string('alt_name', 255);
            $table->string('alt_phone',12);
            $table->string('comments', 255);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('td');
    }
}
