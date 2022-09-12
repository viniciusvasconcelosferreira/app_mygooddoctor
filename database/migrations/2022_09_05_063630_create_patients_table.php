<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('cpf');
            $table->string('rg')->nullable();
            $table->string('phone');
            $table->string('mobile_phone')->nullable();
            $table->string('blood_type');
            $table->string('doctor_crm');
            $table->foreign('doctor_crm')->references('crm')->on('doctors')->onUpdate('cascade');
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
        Schema::dropIfExists('patients');
    }
}
