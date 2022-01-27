<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elearnings', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('syllabus_id')->constrained('kurikulum')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->string('pic_name');
            $table->boolean('is_active')->default(true);
            // $table->foreignId('id')->constrained('vendor')->onDelete('cascade');
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
        Schema::dropIfExists('elearnings');
    }
}
