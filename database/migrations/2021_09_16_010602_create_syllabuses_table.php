<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabuses', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('syllabus_code');
            $table->string('training_name');
            $table->text('training_summary');
            $table->text('training_background');
            $table->text('training_description');
            $table->json('levels')->nullable();
            $table->json('statuses')->nullable();
            $table->json('locations')->nullable();
            $table->json('units')->nullable();
            $table->json('skills_will_you_gain')->nullable();
            $table->text('learning_scope');
            $table->json('vendors')->nullable();
            $table->foreignId('status_id')->constrained('syllabuses_statuses')->onDelete('cascade');
            $table->foreignId('job_family_id')->constrained('job_families')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syllabuses');
    }
}
