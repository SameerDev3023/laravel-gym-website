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
            $table->bigIncrements('order_id');
            $table->string('customer_name')->nullable(false);
            $table->string('customer_email')->nullable(false);
            $table->enum('customer_gender', ['male', 'female', 'other'])->nullable(false);
            $table->bigInteger('customer_number')->nullable(false);
            $table->string('customer_country')->nullable(false);
            $table->string('customer_state')->nullable(false);
            $table->string('customer_city')->nullable(false);
            $table->integer('customer_pincode')->nullable(false);
            $table->string('customer_address')->nullable(false);
            $table->string('payment_method')->nullable(false);
            $table->string('payments_status')->nullable(false);
            $table->string('total_order_price')->nullable(false);
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
