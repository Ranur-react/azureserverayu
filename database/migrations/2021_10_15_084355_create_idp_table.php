<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idp_period_id')->constrained('idp_period')->onDelete('cascade');
            $table->string('nik', 25);
            $table->foreign('nik')->references('nik')->on('employee')->onDelete('cascade');
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
        Schema::dropIfExists('idp');
    }
}
