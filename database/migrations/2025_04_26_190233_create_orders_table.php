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
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('service')->nullable();
            $table->string('price')->nullable();
            $table->string('payment_type')->nullable();
            $table->text('address')->nullable();
            $table->string('essential_file')->nullable();
            $table->string('product_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('order_by')->nullable();
            $table->string('payment_info')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->text('details')->nullable();
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
