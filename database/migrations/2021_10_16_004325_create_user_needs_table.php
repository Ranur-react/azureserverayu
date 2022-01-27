<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_needs', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_program');
            $table->string('objective_program');
            $table->string('training_urgency');
            $table->text('future_plans_after_training');
            $table->text('content');
            $table->foreignId('vendor_id')->constrained()->onDelete('cascade');
            $table->string('trainer');
            $table->string('specialities_trainer');
            $table->string('method');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('hcbp_nik', 25);
            $table->string('created_by_nik', 25);
            $table->foreignId('status_id')->constrained('user_needs_statuses')->onDelete('cascade');
            $table->foreignId('syllabus_id')->nullable()->constrained('syllabuses')->onDelete('cascade');
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
        Schema::dropIfExists('user_needs');
    }
}
