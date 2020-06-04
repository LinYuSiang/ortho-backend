<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKneeEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knee_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('knee_pain')->nullable();
            $table->string('joint_range')->nullable();
            $table->string('antero_posterior')->nullable();
            $table->string('medio_lateral')->nullable();
            $table->string('varus_valgus')->nullable();
            $table->string('flexion_contracture')->nullable();
            $table->string('extension_lag')->nullable();
            $table->string('medical_record_no')->nullable();
            $table->date('surgery_date')->nullable();
            $table->date('birthday')->nullable();
            $table->string('name')->nullable();
            $table->unsignedInteger('toal')->nullable();
            $table->unsignedInteger('pains')->nullable();
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
        Schema::dropIfExists('knee_evaluations');
    }
}
