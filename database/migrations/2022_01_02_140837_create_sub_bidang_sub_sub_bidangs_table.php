<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBidangSubSubBidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_bidang_sub_sub_bidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_bidang_id');
            $table->unsignedInteger('sub_sub_bidang_id');
            $table->timestamps();
            
            $table->foreign('sub_bidang_id')->references('id')->on('sub_bidangs');
            $table->foreign('sub_sub_bidang_id')->references('id')->on('sub_sub_bidangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_bidang_sub_sub_bidangs');
    }
}
