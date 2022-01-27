<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->string('person_id', 25);
            $table->string('nik', 25)->primary();
            $table->string('name', 128);
            $table->string('title')->nullable();
            $table->integer('position_id')->nullable();
            $table->string('organization')->nullable();
            $table->string('band', 1)->nullable();
            $table->string('nik_atasan', 25)->nullable();
            $table->string('nama_atasan', 128);
            $table->string('email', 128)->nullable();
            $table->string('section')->nullable();
            $table->string('department')->nullable();
            $table->string('division')->nullable();
            $table->string('bgroup')->nullable();
            $table->string('egroup')->nullable();
            $table->string('directorate')->nullable();
            $table->string('admins', 45)->nullable();
            $table->string('area_group', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
