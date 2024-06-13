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
        Schema::create('lesson', function (Blueprint $table) {
            $table->id("lesson_id");
            $table->foreignId('course_id')->constrained('courses');
            $table->string("name");
            $table->integer("chapter");
            $table->date("date_uploaded");
            $table->string("description");
            $table->integer("vid_length");
            $table->string("document");
            $table->string("media");
            $table->string("lecturer_name");
            $table->integer("stop_minute");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson');
    }
};
