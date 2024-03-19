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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_no');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('phone');
            $table->text('email');
            $table->text('country');
            $table->text('city');
            $table->text('state');
            $table->text('zip');
            $table->text('street_address');
            $table->unsignedBigInteger('total_price');
            $table->longText('order_notes')->nullable();
            $table->integer('status')->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
