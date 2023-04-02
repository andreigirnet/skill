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
        Schema::create('user_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sharing_from')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('sharing_to')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('package_id')->constrained('packages')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_package');
    }
};
