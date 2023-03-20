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
        Schema::create('invertor_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('user_image')->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('resident_status')->nullable();
            $table->string('location')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('document')->nullable();
            $table->string('document_number')->nullable();
            $table->string('document_front_image')->nullable();
            $table->string('document_back_image')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('pan_name')->nullable();
            $table->string('pan_front_image')->nullable();
            $table->string('pan_back_image')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('cheque_front_image')->nullable();
            $table->string('cheque_back_image')->nullable();
            $table->string('credit_card_bank_name')->nullable();
            $table->string('credit_card_number')->nullable();
            $table->string('nominee_first_name')->nullable();
            $table->string('nominee_last_name')->nullable();
            $table->string('nominee_email')->nullable();
            $table->string('nominee_phone')->nullable();
            $table->string('relationship')->nullable();
            $table->string('nominee_address')->nullable();
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
        Schema::dropIfExists('invertor_details');
    }
};
