<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_request_syllabuses', function (Blueprint $table) {
            $table->integer('organization_id')->length('11');
            $table->foreignId('syllabus_id')->constrained('request_syllabuses')->onDelete('cascade');
            $table->foreign('organization_id')
                ->references('organization_id')->on('organization_units')
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
        Schema::dropIfExists('unit_request_syllabuses');
    }
}
