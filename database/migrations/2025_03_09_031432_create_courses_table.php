<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('course_key')->unique();
        $table->string('course_name');
        $table->unsignedBigInteger('robotics_kit_id'); // FK para kits
        $table->string('cover_image')->nullable();
        $table->text('content');
        $table->timestamps();
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
