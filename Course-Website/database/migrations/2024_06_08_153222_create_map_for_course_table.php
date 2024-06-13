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
        Schema::create('map_for_course', function (Blueprint $table) {
            $table->bigInteger("roadmap_id")->unsigned()->nullable();
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->integer("stage");
            $table->foreign("roadmap_id")->references("roadmap_id")->on("road_map");
            $table->foreign("course_id")->references("id")->on("courses");
            $table->primary(["roadmap_id","course_id"]);
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_for_course');
    }
};
