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
        Schema::create('recommend_for', function (Blueprint $table) {
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->foreign("course_id")->references("id")->on("course_recommendation");
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->primary(["course_id","user_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommend_for');
    }
};
