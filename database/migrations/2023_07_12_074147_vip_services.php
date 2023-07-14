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
        Schema::create('vip_service_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service');
            $table->unsignedInteger('added_by');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('vip_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_type_id');
            $table->unsignedInteger('investment_id');
            $table->unsignedInteger('customer_id');
            $table->date('landing_date');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('reviewed_by');
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by');
            $table->boolean('approve_status');
            $table->boolean('approved_date');

            $table->timestamps();
            $table->foreign('service_type_id')->references('id')->on('vip_service_type')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::create('vip_service_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vip_service_id');
            $table->unsignedInteger('letter_id');
            $table->timestamps();
            $table->foreign('vip_service_id')->references('id')->on('vip_service')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');

        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
