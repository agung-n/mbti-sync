<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_question', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_question')->index();
            $table->foreignId('id_answera')->index();
            $table->foreignId('id_answerb')->index();
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
