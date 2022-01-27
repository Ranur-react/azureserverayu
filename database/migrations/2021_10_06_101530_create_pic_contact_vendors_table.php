<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicContactVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pic_contact_vendors', function (Blueprint $table) {
            $table->id();
            $table->string('pic_name')->nullable();
            $table->string('nik', 25)->nullable();
            $table->string('position')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number',15)->nullable();
            $table->boolean('is_pic_account_manager');
            $table->foreignId('vendor_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('pic_contact_vendors');
    }
}
