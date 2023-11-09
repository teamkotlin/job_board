<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Job;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Job::class)->constrained();
            $table->unsignedInteger('expected_salary');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
