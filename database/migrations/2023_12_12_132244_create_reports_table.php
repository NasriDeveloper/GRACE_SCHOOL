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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Sex')->nullable();
            $table->string('Class')->nullable();
            $table->string('Stream')->nullable();
            
            $subjects = [
                'English', 'Kiswahili', 'CivicsMoral', 'SocialStudies',
                'ScienceTechn', 'Mathematics'
            ];

            foreach ($subjects as $subject) {
                $table->string("{$subject}Score")->nullable();
                $table->string("{$subject}Grade")->nullable();
                $table->string("{$subject}Rank")->nullable();
                $table->string("{$subject}Out")->nullable();
                $table->string("{$subject}Remark")->nullable();
                $table->string("{$subject}Subject")->nullable();
            }
            $table->string('TotalMarks')->nullable();
            $table->string('Average')->nullable();
            $table->string('Grade')->nullable();
            $table->string('Remark')->nullable();
            $table->string('Position')->nullable();
            $table->string('Out_of')->nullable();
            $table->string('Sport')->nullable();
            $table->string('Cooperation')->nullable();
            $table->string('Discipline')->nullable();
            $table->string('Cleanliness')->nullable();
            $table->string('Hardworking')->nullable();
            $table->string('PrincipalComment')->nullable();
            $table->string('ClassTeacher')->nullable();
            $table->string('PhoneNo')->nullable();
            $table->string('PrincipalName')->nullable();
            $table->string('PhoneN')->nullable();
            $table->string('Signature')->nullable();
            $table->string('DateOf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
