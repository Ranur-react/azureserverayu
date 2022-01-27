<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_request_syllabuses', function (Blueprint $table) {
            $table->foreignId('vendor_id')->constrained('vendors')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('vendor_request_syllabuses');
    }
}
