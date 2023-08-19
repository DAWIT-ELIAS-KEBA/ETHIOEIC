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
        Schema::create('investment_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('investment_or_business');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });
        Schema::create('document_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });

        Schema::create('investment_type_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('document_type_id');
            $table->unsignedInteger('investment_type_id');
            $table->boolean('is_mandatory');
            $table->unsignedInteger('added_by');
            $table->timestamps();
        });


        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_type_id");
            $table->unsignedInteger('company_name_id')->nullable();
            $table->string('trade_name');
            $table->unsignedInteger("business_type_id");
            $table->unsignedInteger('manager_id');
            $table->unsignedInteger('created_by');
            $table->string('attorney_name');
            $table->unsignedInteger('reviewed_by')->nullable();
            $table->boolean('review_status');
            $table->unsignedInteger('approved_by')->nullable();
            $table->boolean('approve_status')->nullable();;
            $table->string('comment')->nullable();;
            $table->unsignedInteger('payment_id')->nullable();
            $table->string('license_file')->nullable();
            $table->unsignedInteger('license_prepared_by')->nullable();;
            $table->string('issued_date')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('license_code')->nullable();

            $table->string('investment_status')->nullable();
            $table->unsignedInteger('status_changed_by')->nullable();

            $table->timestamps();
        });



        Schema::create('company_name', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("sent_by")->nullable();
            $table->unsignedInteger("viewed_by")->nullable();
            $table->string("comment")->nullable();
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('selected_name')->nullable();;
            $table->unsignedInteger('investment_id');
            $table->timestamps();

        });




        Schema::create('investment_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string('field_of_business');
            $table->string('objective');
            $table->float('capital_in_usd');
            $table->float('capital_in_etb');
            $table->string('finance_source_equity');
            $table->string('finance_source_loan');
            $table->string('estimated_employee');
            $table->unsignedInteger('info_source');
            $table->timestamps();
        });

        Schema::create('investment_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("description");
            $table->boolean("is_major");
            $table->timestamps();
        });


        Schema::create('investment_address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("woreda_id");
            $table->string("house_no");
            $table->string("p_o_box");
            $table->string("telephone");
            $table->string("fax_email");
            $table->string("address_type");  // office or location
            $table->timestamps();
        });

        Schema::create('annual_production', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("item_id");
            $table->unsignedInteger("measurement_id");
            $table->integer("quantity");
            $table->integer("local_share");
            $table->integer("export_share");

            $table->timestamps();
        });

        Schema::create('raw_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("material_id");
            $table->unsignedInteger("measurement_id");
            $table->integer("quantity");
            $table->integer("local_share");
            $table->integer("export_share");
            $table->timestamps();
        });



        Schema::create('impact_and_mitigation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("impact");
            $table->string("mitigation");
            $table->timestamps();
        });

        Schema::create('shareholders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("customer_id");
            $table->boolean("is_signed");
            $table->string("telephone1");
            $table->string("telephone2");
            $table->timestamps();
        });

        Schema::create('company_Representative', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("representative_id");
            $table->boolean("is_signed");
            $table->timestamps();
        });



        Schema::create('investement_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("document_path");
            $table->boolean("status");
            $table->string("comment");
            $table->timestamps();
        });


        Schema::create('notarization_of_memorandum', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("created_by");
            $table->string("type");    // moa or mou
            $table->unsignedInteger("authenticated_by");
            $table->boolean("authenticate_status");
            $table->unsignedInteger("approved_by");
            $table->boolean("approve_status");
            $table->string("comment");

            $table->unsignedInteger("payment_id");

            $table->string("agreement_draft");
            $table->string("agreement_doc_file");

            $table->boolean("file_status");
            $table->string("file_comment");
            $table->string("archieve_id");

            $table->timestamps();

        });


        Schema::create('memorandum_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("memorandum_id");
            $table->unsignedInteger("shareholder_id");
            $table->boolean("is_signed");
            $table->timestamps();

        });




        Schema::create('land_notarization', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("created_by");
            $table->string("type");    // moa or mou
            $table->unsignedInteger("authenticated_by");
            $table->boolean("authenticate_status");
            $table->unsignedInteger("approved_by");
            $table->boolean("approve_status");
            $table->string("comment");

            $table->unsignedInteger("payment_id");

            $table->string("agreement_draft");
            $table->string("agreement_doc_file");

            $table->boolean("file_status");
            $table->string("file_comment");
            $table->string("archieve_id");

            $table->timestamps();
        });


        Schema::create('land_notarization_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("notarization_id");
            $table->unsignedInteger("shareholder_id");
            $table->boolean("is_signed");
            $table->timestamps();


        });


        Schema::create('investment_employee', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("employee_id");
            $table->boolean("is_accepted")->default(0);
            $table->boolean("status")->default(1);
            $table->unsignedInteger("added_by");
            $table->string("educational_background");
            $table->string("work_experience");
            $table->string("contract_agreement");

            $table->timestamps();
        });





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
