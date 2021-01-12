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
            $table->foreignId('id_personality')->references('id')->on('mst_personality');
            $table->foreignId('id_role')->references('id')->on('mst_role');
        });

        Schema::table('mst_answer', function (Blueprint $table) {
            $table->foreignId('id_question')->references('id')->on('mst_question');
            });  
    
        Schema::table('tbl_answer', function (Blueprint $table) {
            $table->foreignId('id_user')->references('id')->on('mst_user');
            $table->foreignId('id_question')->references('id')->on('mst_question');
            $table->foreignId('id_answer')->references('id')->on('mst_answer');
            }); 

        Schema::table('tbl_appointment', function (Blueprint $table) {
            $table->foreignId('id_date')->references('id')->on('mst_date');
            $table->foreignId('id_time')->references('id')->on('mst_time');
            $table->foreignId('id_teacher')->references('id')->on('mst_user');
            $table->foreignId('id_grade')->references('id')->on('mst_grade');
            $table->foreignId('id_subject')->references('id')->on('mst_subject');
            $table->foreignId('id_student')->references('id')->on('mst_user');
            });  

        Schema::table('tbl_question', function (Blueprint $table) {
            $table->foreignId('id_question')->references('id')->on('mst_question');
            $table->foreignId('id_answer')->references('id')->on('mst_answer');
            });

        Schema::table('tbl_personality', function (Blueprint $table) {
            $table->foreignId('id_user')->references('id')->on('mst_user');
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
