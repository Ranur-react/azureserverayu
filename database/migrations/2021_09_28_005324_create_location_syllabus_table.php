<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_syllabus', function (Blueprint $table) {
            $table->integer('location_id')->length('11');
            $table->foreignId('syllabus_id')->constrained('syllabuses')->onDelete('cascade');
            $table->foreign('location_id')
                ->references('location_id')->on('location')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_syllabus');
    }
}
