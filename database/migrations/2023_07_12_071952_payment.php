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
        Schema::create('payment_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_name');
            $table->integer('amount_dollar');
            $table->integer('amount_birr');
            $table->unsignedInteger('amount_set_by');
            $table->timestamps();
            $table->foreign('amount_set_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('case_id');
            $table->unsignedInteger('payer_id');
            $table->unsignedInteger('payed_by')->nullable();
            $table->unsignedInteger('investment_id')->nul;
            $table->float('amount_birr');
            $table->float('amount_dollar');
            $table->unsignedInteger('cashier_id')->nullable();
            $table->string('api_id')->nullable();
            $table->string('api_transaction_id')->nullable();
            $table->date('issued_date')->nullable();
            $table->boolean('payment_status')->default(0);
            $table->string('payment_slip')->nullable();
            $table->string('processed_by')->nullable();                     // wether by manual or api
            $table->timestamps();
            $table->foreign('case_id')->references('id')->on('payment_cases')->onDelete('cascade');
            $table->foreign('payer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('payed_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('cashier_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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
