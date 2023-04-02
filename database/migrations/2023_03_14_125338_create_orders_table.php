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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('product_name');
            $table->integer('quantity')->default(1);
            $table->float('paid');
            $table->text('charge_id')->nullable();
            $table->text('invoice_id')->nullable();
            $table->text('address')->nullable();
            $table->text('county')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
