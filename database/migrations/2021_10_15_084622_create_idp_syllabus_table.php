<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdpSyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idp_syllabus', function (Blueprint $table) {
            $table->foreignId('idp_id')->constrained('idp')->onDelete('cascade');
            $table->foreignId('syllabus_id')->constrained('syllabuses')->onDelete('cascade');
            $table->integer('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idp_syllabus');
    }
}
