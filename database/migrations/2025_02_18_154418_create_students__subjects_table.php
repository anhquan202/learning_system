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
        Schema::create('students_subjects', function (Blueprint $table) {
            $table->uuid('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->primary(['student_id', 'subject_id']);
            $table->float('score');
            $table->foreign('student_id')->references('person_id')->on('students')->onDelete('cascade');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_subjects');
    }
};
