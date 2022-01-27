<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrfCompetencySyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prf_competency_syllabus', function (Blueprint $table) {
            $table->integer('prf_competency_catalog_id')->length('11');
            $table->foreignId('syllabus_id')->constrained('syllabuses')->onDelete('cascade');
            $table->foreign('prf_competency_catalog_id')
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
        Schema::dropIfExists('prf_competency_syllabus');
    }
}
