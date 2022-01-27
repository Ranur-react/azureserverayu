<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_syllabus', function (Blueprint $table) {
            $table->foreignId('status_id')->constrained('statuses')->references('id')->onDelete('cascade');
            $table->foreignId('syllabus_id')->constrained('syllabuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_syllabus');
    }
}
