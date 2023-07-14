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
        Schema::create('visa_request', function (Blueprint $table) {

            $table->increments('id');
            $table->string('visa_type');    // investment  or work or residence
            $table->string('visa_process_type');   //new or extension or substitution or conversion
            $table->unsignedInteger('investment_id');
            $table->unsignedInteger('letter_id');
            $table->string('other_docs')->nullable();
            $table->unsignedInteger('customer_id');


            $table->unsignedInteger('pm_approved_by');
            $table->boolean('pm_review_status');
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by')->nullable();
            $table->boolean('approve_status');

            $table->string('comment');

            $table->unsignedInteger('payment_id');

            $table->string('visa_file')->nullable();
            $table->string('visa_file_approved_by')->nullable();
            $table->string('visa_file_comment')->nullable();

            $table->date('file_submitted_date');
            $table->date('issued_date');
            $table->date('expired_date');


            $table->unsignedInteger('converting_visa_type_id')->nullable(); // if process type is conversion
            $table->string('other_visa_file')->nullable();// if process type is conversion

            $table->timestamps();
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('pm_approved_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('converting_visa_type_id')->references('id')->on('visa_type')->onDelete('cascade');
        });

        Schema::create('visa_letters', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('request_id');
            $table->unsignedInteger('letter_id');

            $table->timestamps();
            $table->foreign('request_id')->references('id')->on('visa_request')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');


        });

        Schema::create('work_permit_request', function (Blueprint $table) {

            $table->increments('id');
            $table->string('process_type');   //new or extension or substitution
            $table->unsignedInteger('investment_id');
            $table->unsignedInteger('letter_id');
            $table->string('other_docs')->nullable();
            $table->unsignedInteger('employee_id');


            $table->unsignedInteger('pm_approved_by');
            $table->boolean('pm_review_status');
            $table->unsignedInteger('reviewed_by');
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by');
            $table->boolean('approve_status');

            $table->string('comment');

            $table->unsignedInteger('payment_id');


            $table->string('work_permit_file')->nullable();
            $table->unsignedInteger('work_permit_prepared_by');
            $table->string('issued_date')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('work_permit_code')->nullable();

            $table->string('work_permit_status')->default(1);
            $table->string('status_changed_by')->nullable();



            $table->timestamps();
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('pm_approved_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
        });

        Schema::create('work_permit_letters', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('request_id');
            $table->unsignedInteger('letter_id');

            $table->timestamps();
            $table->foreign('request_id')->references('id')->on('work_permit_request')->onDelete('cascade');
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