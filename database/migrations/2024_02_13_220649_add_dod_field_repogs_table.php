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
        
        Schema::table('repogs', function (Blueprint $table) {
            $table->date('dob')->nullable();
            $table->text('photo3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('repogs', function (Blueprint $table) {
            $table->dropColumn('dob'); 
            $table->dropColumn('photo3');
        });
    }
};
