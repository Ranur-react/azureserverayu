<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassVideoConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_video_conference', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('class_sections')->onDelete('cascade');
            $table->string('name');
            $table->string('platform');
            $table->string('url');
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
        Schema::dropIfExists('class_video_conference');
    }
}
