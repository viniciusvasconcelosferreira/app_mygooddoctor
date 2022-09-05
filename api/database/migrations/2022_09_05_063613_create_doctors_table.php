<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->string('crm', 15)->primary();
            $table->string('cpf');
            $table->string('rg')->nullable();
            $table->string('gender');
            $table->string('education');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile_phone')->nullable();
            $table->string('department');
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
        Schema::dropIfExists('doctors');
    }
}
