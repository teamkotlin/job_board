<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Employer;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->foreignIdFor(User::class)->nullable()->constrained();
            $table->timestamps();
        });
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreignIdFor(Employer::class)->constrained();
        });
    }


    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeignIdFor(Employer::class);
        });
        Schema::dropIfExists('employers');
    }
};
