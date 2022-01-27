<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('pt_name', 64)->nullable();
            $table->string('partner_name', 64)->nullable();
            $table->string('supplier_number')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code', 16)->nullable();
            $table->string('telephone_number', 15)->nullable();
            $table->string('ext', 16)->nullable();
            $table->string('fax', 16)->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->text('category')->nullable();
            $table->text('cluster_1')->nullable();
            $table->text('cluster_2_primary')->nullable();
            $table->text('cluster_2_optional')->nullable();
            $table->foreignId('status_id')->constrained('vendors_statuses')->onDelete('cascade');
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
        Schema::dropIfExists('vendors');
    }
}
