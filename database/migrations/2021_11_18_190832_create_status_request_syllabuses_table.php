<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_request_syllabuses', function (Blueprint $table) {
            $table->foreignId('status_id')->constrained('statuses')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('status_request_syllabuses');
    }
}
