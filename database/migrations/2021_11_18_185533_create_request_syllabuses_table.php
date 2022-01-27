<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_syllabuses', function (Blueprint $table) {
            $table->id();
            $table->string('training_name');
            $table->text('training_summary');
            $table->text('training_background');
            $table->text('training_description');
            $table->text('learning_scope');
            $table->foreignId('syllabus_id')->nullable()->constrained('syllabuses')->onDelete('set null');
            $table->foreignId('status_id')->constrained('request_syllabuses_statuses')->onDelete('cascade');
            $table->foreignId('job_family_id')->constrained('job_families')->onDelete('cascade');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_syllabuses');
    }
}
