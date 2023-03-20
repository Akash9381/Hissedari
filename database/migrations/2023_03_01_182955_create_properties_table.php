<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_type')->nullable();
            $table->text('property_image')->nullable();
            $table->string('property_feature_image')->nullable();
            $table->string('property_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('property_location')->nullable();
            $table->string('property_area')->nullable();
            $table->string('property_min_investment')->nullable();
            $table->string('property_gross_entry')->nullable();
            $table->string('property_target_irr')->nullable();
            $table->string('property_target_multiple')->nullable();
            $table->string('property_price')->nullable();
            $table->text('property_overview')->nullable();
            $table->text('property_tenancy')->nullable();
            $table->string('lease_start')->nullable();
            $table->string('lease_lock')->nullable();
            $table->string('lease_end')->nullable();
            $table->text('tenant_overview')->nullable();
            $table->string('tenant_title')->nullable();
            $table->string('tenant_value')->nullable();
            $table->text('property_details')->nullable();
            $table->string('place')->nullable();
            $table->string('distance')->nullable();
            $table->string('location_map')->nullable();
            $table->text('floor_plans')->nullable();
            $table->string('structure_image')->nullable();
            $table->string('three_d_structure_image')->nullable();
            $table->string('price_type')->nullable();
            $table->string('price_value')->nullable();
            $table->text('faq_title')->nullable();
            $table->text('faq_description')->nullable();
            $table->string('resource_one')->nullable();
            $table->string('resource_two')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
