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
        Schema::create('cozes', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('parentfirstName')->nullable();
            $table->string('parentlastName')->nullable();
            $table->unsignedInteger('class')->nullable();
            $table->unsignedInteger('yearOfEntry')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('photo')->nullable();
            $table->string('nationality')->nullable();
            $table->string('placeOfBirth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cozes');
    }
};
