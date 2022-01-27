<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_request_syllabuses', function (Blueprint $table) {
            $table->foreignId('level_id')->constrained('levels')->references('id')->onDelete('cascade');
            $table->foreignId('syllabus_id')->constrained('request_syllabuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_request_syllabuses');
    }
}
