<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangSubBidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_sub_bidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bidang_id');
            $table->unsignedInteger('sub_bidang_id');
            $table->timestamps();
            
            $table->foreign('bidang_id')->references('id')->on('bidangs');
            $table->foreign('sub_bidang_id')->references('id')->on('sub_bidangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidang_sub_bidangs');
    }
}
