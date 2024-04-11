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
        Schema::create('parets', function (Blueprint $table) {
    $table->id();
    $table->string('fatherName')->nullable();
    $table->string('fatherFname')->nullable();
    $table->string('Class')->nullable();
    $table->string('email')->unique();
    $table->string('fatherAddress')->nullable();
    $table->string('fatherPhone')->nullable();
    $table->string('fatherOccupation')->nullable();
    $table->string('fatherEducation')->nullable();
    $table->string('fatherNID')->nullable();
    $table->string('fatherReligion')->nullable();
    $table->text('fatherPhoto')->nullable(); // Assuming you store file paths, adjust accordingly

    $table->string('MotherName')->nullable();
    $table->string('motherCname')->nullable();
    $table->string('motherAddress')->nullable();
    $table->string('motherPhone')->nullable();
    $table->string('motherOccupation')->nullable();
    $table->string('motherEducation')->nullable();
    $table->string('motherNID')->nullable();
    $table->string('motherReligion')->nullable();
    $table->text('motherPhoto')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parets');
    }
};
