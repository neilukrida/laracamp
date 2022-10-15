<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('camp_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            // 2nd method
            //$table->id();
            //$table->foreignId('camp_id)->constrained();
            //table->string('name');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
