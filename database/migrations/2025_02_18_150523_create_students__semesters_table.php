<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students_semesters', function (Blueprint $table) {
            $table->uuid('student_id');
            $table->unsignedBigInteger('semester_id');
            $table->primary(['student_id', 'semester_id']);
            $table->foreign('student_id')->references('person_id')->on('students')->onDelete('cascade');
            $table->foreign('semester_id')->references('semester_id')->on('semesters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_semesters');
    }
};
