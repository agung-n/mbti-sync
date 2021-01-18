<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_date')->index();
            $table->foreignId('id_time')->index();
            $table->foreignId('id_teacher')->index();
            $table->foreignId('id_grade')->index();
            $table->foreignId('id_subject')->index();
            $table->foreignId('id_student')->index();
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
