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
        Schema::create('teachers_positions', function (Blueprint $table) {
            $table->unsignedBigInteger('position_id');
            $table->uuid('teacher_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreign('teacher_id')->references('person_id')->on('teachers')->onDelete('cascade');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_positions');
    }
};
