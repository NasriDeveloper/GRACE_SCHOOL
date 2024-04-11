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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('parentfirstName');
            $table->string('parentlastName');
            $table->unsignedInteger('class');
            $table->unsignedInteger('yearOfEntry');
            $table->string('gender');
            $table->date('dob');
            $table->string('photo');
            $table->string('nationality');
            $table->string('placeOfBirth');
            // Add more columns as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
