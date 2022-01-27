<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCspSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csp_syllabus', function (Blueprint $table) {
            $table->foreignId('csp_id')->constrained('csp')->onDelete('cascade');
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
        Schema::dropIfExists('csp_syllabus');
    }
}
