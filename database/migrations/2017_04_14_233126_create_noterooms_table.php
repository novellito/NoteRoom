<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noterooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('note_id')->unsigned();
            $table->foreign('note_id')->references('id')->on('notes');
            $table->string('invite_id');
        });

            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noterooms');
    }
}
