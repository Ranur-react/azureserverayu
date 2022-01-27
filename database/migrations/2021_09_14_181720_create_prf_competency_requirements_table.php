<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrfCompetencyRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prf_competency_requirements', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('position_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('competency_id')->nullable();
            $table->integer('minimum_requirement')->nullable();
            $table->text('minimum_requirement_description')->nullable();
            $table->string('legal_entity', 32)->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updated_by', 32)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('created_by', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prf_competency_requirements');
    }
}
