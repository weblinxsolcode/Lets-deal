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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sku');
            $table->string('title');
            $table->string('price');
            $table->string('discount_price');
            $table->text('main_image');
            $table->string('product_url');
            $table->unsignedBigInteger('quantity');
            $table->longText('product_description');
            $table->longText('product_information');
            $table->longText('terms_of_use');
            $table->longText('more_about_the_product');
            $table->integer('status')->default(1);
            $table->integer('is_approved')->default(0);

            $table->foreign('vendor_id')
                ->references('id')->on('vendors')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
