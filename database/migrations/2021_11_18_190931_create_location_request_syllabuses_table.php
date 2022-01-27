<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_request_syllabuses', function (Blueprint $table) {
            $table->integer('location_id')->length('11');
            $table->foreignId('syllabus_id')->constrained('request_syllabuses')->onDelete('cascade');
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
        Schema::dropIfExists('location_request_syllabuses');
    }
}
