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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('company_logo');
            $table->string('contact_person');
            $table->string('organization_number');
            $table->string('email');
            $table->string('telephone');
            $table->string('area');
            $table->text('street_address');
            $table->string('zip_code');
            $table->text('location');
            $table->integer('is_hold_tax_form');
            $table->integer('is_tried_this_concept_before');
            $table->longText('which_product_you_want_to_market');
            $table->longText('what_your_comany_do');
            $table->text('website_url');
            $table->string('password')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
