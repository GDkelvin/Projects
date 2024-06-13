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
        Schema::create('categories_for_course', function (Blueprint $table) {
            $table->bigInteger("category_id")->unsigned()->nullable();
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->foreign("category_id")->references("category_id")->on("categories");
            $table->foreign("course_id")->references("id")->on("courses");
            $table->primary(["category_id","course_id"]);
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_for_course');
    }
};
