<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencyRequestSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competency_request_syllabus', function (Blueprint $table) {
            $table->integer('competency_id')->length('11');
            $table->foreignId('syllabus_id')->constrained('request_syllabuses')->onDelete('cascade');
            $table->foreign('competency_id')
            ->references('id')->on('prf_competency_catalog')
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
        Schema::dropIfExists('competency_request_syllabus');
    }
}
