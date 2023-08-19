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
        Schema::create('other_visa', function (Blueprint $table) {

            $table->increments('id');
            $table->string('type');

            $table->unsignedInteger('added_by');
            $table->unsignedInteger('updated_by')->nullable();

            $table->timestamps();



        });


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
