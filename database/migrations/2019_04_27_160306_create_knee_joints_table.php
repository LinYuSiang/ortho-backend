<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKneeJointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knee_joints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('patient_id');
            $table->string('type')->nullable();
            $table->string('type_other')->nullable();
            $table->date('surgery_date')->nullable();
            $table->string('valgus')->nullable();
            $table->string('valgus_other')->nullable();
            $table->string('leg')->nullable();
            $table->string('anesthesia')->nullable();
            $table->string('anesthesia_other')->nullable();
            $table->unsignedInteger('rom_one')->nullable();
            $table->unsignedInteger('rom_two')->nullable();
            $table->string('pre_op_patellar_tracking')->nullable();
            $table->unsignedInteger('knee_score')->nullable();
            $table->string('approach')->nullable();
            $table->string('approach_other')->nullable();
            $table->string('approach_type')->nullable();
            $table->double('femoral_size')->nullable();
            $table->string('ps_type')->nullable();
            $table->unsignedInteger('insert_thickness')->nullable();
            $table->string('self_pay')->nullable();
            $table->double('tibia_size')->nullable();
            $table->unsignedInteger('patlla_size')->nullable();
            $table->double('thickness')->nullable();
            $table->string('femoral_extemsion_stem_size')->nullable();
            $table->string('tibia_extemsion_stem_size')->nullable();
            $table->string('wedge_part')->nullable();
            $table->string('wedge_thickness')->nullable();
            $table->string('lateral_release')->nullable();
            $table->string('patellar_tracking')->nullable();
            $table->double('pre_op')->nullable();
            $table->double('post_op')->nullable();
            $table->string('bone_cement')->nullable();
            $table->string('antibiotic')->nullable();
            $table->unsignedInteger('systolic')->nullable();
            $table->unsignedInteger('diastolic')->nullable();
            $table->unsignedInteger('tourniquet_pressure')->nullable();
            $table->unsignedInteger('hemostasis_time')->nullable();
            $table->string('special_circumstances')->nullable();
            $table->string('clexanes')->nullable();
            $table->string('remark')->nullable();
            $table->string('remark_other')->nullable();
            $table->string('others')->nullable();
            $table->string('pca')->nullable();
            $table->string('pai')->nullable();
            $table->string('tencam')->nullable();
            $table->string('transamine')->nullable();
            $table->string('transamine_text')->nullable();
            $table->double('medial_distal')->nullable();
            $table->double('medial_posterior')->nullable();
            $table->double('medial_tibai')->nullable();
            $table->double('lateral_distal')->nullable();
            $table->double('lateral_posterior')->nullable();
            $table->double('lateral_tibai')->nullable();
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
        Schema::dropIfExists('knee_joints');
    }
}
