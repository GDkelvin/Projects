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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lecturer");
            $table->dateTime("timestamp");
            $table->integer("number_of_chapters");
            $table->integer("number_of_lessons");
            $table->integer("time_to_complete");
            $table->string("description");
            $table->integer("number_of_feedbacks");
            $table->decimal("avg_stars",2,2);
            $table->integer("cost");
            $table->decimal("saleoff",2,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
