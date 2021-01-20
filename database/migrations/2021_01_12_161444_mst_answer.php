<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_answer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_question')->index();
            $table->string('text');
            $table->integer('value_e');
            $table->integer('value_s');
            $table->integer('value_t');
            $table->integer('value_j');
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
        //
    }
}
