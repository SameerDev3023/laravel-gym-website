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
            $table->id('order_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->enum('customer_gender',['male','female','other']);          
            $table->integer('customer_number');
            $table->string('customer_country');
            $table->string('customer_state');
            $table->string('customer_city');
            $table->integer('customer_pincode');
            $table->string('customer_address');
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
