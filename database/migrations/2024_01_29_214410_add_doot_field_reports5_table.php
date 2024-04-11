<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports5', function (Blueprint $table) {
            $table->text('photo')->nullable();
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();  // corrected column name
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports5', function (Blueprint $table) {
            $table->dropColumn('photo'); 
            $table->dropColumn('photo1'); 
            $table->dropColumn('photo2');     // corrected column name
        });
    }
};
