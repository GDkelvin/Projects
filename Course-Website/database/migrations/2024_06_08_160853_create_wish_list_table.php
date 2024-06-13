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
        Schema::create('wish_list', function (Blueprint $table) {
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->date("last_update");
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->foreign("course_id")->references("id")->on("courses");
            $table->primary(["user_id","course_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wish_list');
    }
};
