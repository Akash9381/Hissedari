<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_panels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('referral_code');
            $table->string('company_name')->nullable();
            $table->string('mobile_1')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('nature_of_company')->nullable();
            $table->date('date_of_incorporation')->nullable();
            $table->string('rera_registration_number')->nullable();
            $table->string('gst_registration_number')->nullable();
            $table->string('company_pan_deatails')->nullable();
            $table->string('company_pan_number')->nullable();
            $table->string('name_on_pan_card')->nullable();
            $table->string('pan_card_photo')->nullable();
            $table->string('profile')->nullable();
            $table->enum('status',['yes','no']);

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
        Schema::dropIfExists('cp_panels');
    }
};
