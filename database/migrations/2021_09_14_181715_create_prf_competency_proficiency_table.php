<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrfCompetencyProficiencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prf_competency_proficiency', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('type')->nullable();
            $table->integer('competency_id')->nullable();
            $table->integer('level')->nullable();
            $table->string('level_description', 128)->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prf_competency_proficiency');
    }
}

