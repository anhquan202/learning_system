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
        Schema::create('parents_students', function (Blueprint $table) {
            $table->uuid('parent_id');
            $table->uuid('student_id');
            $table->primary(['parent_id', 'student_id']);
            $table->foreign('parent_id')->references('person_id')->on('parents')->onDelete('cascade');
            $table->foreign('student_id')->references('person_id')->on('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents_students');
    }
};
