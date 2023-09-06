<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // student details
            $table->string('student_name');
            $table->string('student_name_en');
            $table->date('student_DOB');
            $table->string('student_birth_reg')->unique();
            $table->string('student_gender');
            // ------------
            $table->integer('class_id');
            $table->integer('student_roll')->nullable();
            $table->integer('student_section')->nullable();
            $table->integer('photo_id')->unsigned()->nullable();
            $table->integer('certificate_id')->unsigned()->nullable();
            $table->integer('status')->default(0);


                // fathers details
            $table->string('fathers_name');
            $table->string('fathers_name_en');
            $table->date('fathers_DOB');
            $table->string('fathers_birth_reg');
            $table->string('fathers_NID');
            $table->string('fathers_phone');
            $table->string('fathers_profession')->nullable();
                // mothers details
            $table->string('mothers_name');
            $table->string('mothers_name_en');
            $table->date('mothers_DOB');
            $table->string('mothers_birth_reg');
            $table->string('mothers_NID');
            $table->string('mothers_phone');
            $table->string('mothers_profession')->nullable();
                // guardian details
            $table->string('guardian_name')->nullable();
            $table->string('guardian_name_en')->nullable();
            $table->date('guardian_DOB')->nullable();
            $table->string('guardian_birth_reg')->nullable();
            $table->string('guardian_NID')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_relation')->nullable();
                // permanent address
            $table->string('permanent_division');
            $table->string('permanent_district');
            $table->string('permanent_upazila');
            $table->string('permanent_postOffice');
            $table->string('permanent_postCode');
            $table->string('permanent_village');
                // present address
            $table->string('present_division');
            $table->string('present_district');
            $table->string('present_upazila');
            $table->string('present_postOffice');
            $table->string('present_postCode');
            $table->string('present_village');
                // extra info
            $table->string('nationality');
            $table->string('religion');
            $table->string('physical_disability')->nullable();

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
        Schema::dropIfExists('students');
    }
}
