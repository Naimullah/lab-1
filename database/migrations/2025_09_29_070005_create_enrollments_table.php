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
        Schema::create('enrollments', function (Blueprint $table) {
               $table->foreignId('course_id')
                  ->constrained('courses')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->foreignId('student_id')
                  ->constrained('students')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->timestamp('enrolled_at')->useCurrent();

            // Composite primary key
            $table->primary(['course_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
