<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mst_user', function (Blueprint $table) {
            $table->foreign('id_personality')->references('id')->on('mst_personality');
            $table->foreign('id_role')->references('id')->on('mst_role');
            });

        Schema::table('mst_answer', function (Blueprint $table) {
            $table->foreign('id_question')->references('id')->on('mst_question');
            });  
    
        Schema::table('tbl_answer', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('mst_user');
            $table->foreign('id_question')->references('id')->on('mst_question');
            $table->foreign('id_answer')->references('id')->on('mst_answer');
            }); 

        Schema::table('tbl_appointment', function (Blueprint $table) {
            $table->foreign('id_date')->references('id')->on('mst_date');
            $table->foreign('id_time')->references('id')->on('mst_time');
            $table->foreign('id_teacher')->references('id')->on('mst_user');
            $table->foreign('id_grade')->references('id')->on('mst_grade');
            $table->foreign('id_subject')->references('id')->on('mst_subject');
            $table->foreign('id_student')->references('id')->on('mst_user');
            });  

        Schema::table('tbl_question', function (Blueprint $table) {
            $table->foreign('id_question')->references('id')->on('mst_question');
            $table->foreign('id_answera')->references('id')->on('mst_answer');
            $table->foreign('id_answerb')->references('id')->on('mst_answer');
            });

        Schema::table('tbl_personality', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('mst_user');
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
