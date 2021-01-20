<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPersonality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personality', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->index();
            $table->integer('total_e');
            $table->integer('total_s');
            $table->integer('total_t');
            $table->integer('total_j');
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
