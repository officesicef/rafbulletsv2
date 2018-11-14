<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
        });

        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
        });

        Schema::create('diagnoses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
        });

        Schema::create('symptoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
        });

        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
        });

        Schema::create('examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');
            $table->integer('patient_id');
            $table->integer('diagnose_id');
        });




        Schema::create('drug_examination', function (Blueprint $table) {
            $table->integer('examination_id');
            $table->integer('drug_id');
        });

        Schema::create('examination_symptom', function (Blueprint $table) {
            $table->integer('examination_id');
            $table->integer('symptom_id');
        });

        Schema::create('drug_contra_drug', function (Blueprint $table) {
            $table->integer('drug_id');
            $table->integer('contra_drug_id');
            $table->text('reason');
        });

        Schema::create('diagnose_drug', function (Blueprint $table) {
            $table->integer('drug_id');
            $table->integer('diagnose_id');
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
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('diagnoses');
        Schema::dropIfExists('symptoms');
        Schema::dropIfExists('drugs');
        Schema::dropIfExists('examinations');
        Schema::dropIfExists('drug_examination');
        Schema::dropIfExists('examination_symptom');
        Schema::dropIfExists('drug_contra_drug');
        Schema::dropIfExists('diagnose_drug');
    }
}
