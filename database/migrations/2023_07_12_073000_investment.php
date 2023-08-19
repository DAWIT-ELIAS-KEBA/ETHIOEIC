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
            $table->boolean('investment_or_business');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('document_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('investment_type_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('document_type_id');
            $table->unsignedInteger('investment_type_id');
            $table->boolean('is_mandatory');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('document_type_id')->references('id')->on('document_type')->onDelete('cascade');
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

            $table->foreign('business_type_id')->references('id')->on('investment_type')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('license_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_changed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_type_id')->references('id')->on('investment_type')->onDelete('cascade');

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
            $table->foreign('sent_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('viewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });


        Schema::create('info_source', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
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

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('investment_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("description");
            $table->boolean("is_major");
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
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
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('materials_items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
            $table->timestamps();
        });



        Schema::create('impact_and_mitigation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("impact");
            $table->string("mitigation");
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('shareholders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("customer_id");
            $table->boolean("is_signed");
            $table->string("telephone1");
            $table->string("telephone2");
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('company_Representative', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->unsignedInteger("representative_id");
            $table->boolean("is_signed");
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('representative_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        


        Schema::create('investement_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("investment_id");
            $table->string("document_path");
            $table->boolean("status");
            $table->string("comment");
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('authenticated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');


        });


        Schema::create('memorandum_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("memorandum_id");
            $table->unsignedInteger("shareholder_id");
            $table->boolean("is_signed");
            $table->timestamps();
            $table->foreign('memorandum_id')->references('id')->on('notarization_of_memorandum')->onDelete('cascade');
            $table->foreign('shareholder_id')->references('id')->on('Customers')->onDelete('cascade');
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

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('authenticated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');


        });


        Schema::create('land_notarization_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("notarization_id");
            $table->unsignedInteger("shareholder_id");
            $table->boolean("is_signed");
            $table->timestamps();
            $table->foreign('shareholder_id')->references('id')->on('Customers')->onDelete('cascade');
            $table->foreign('notarization_id')->references('id')->on('land_notarization')->onDelete('cascade');

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
            $table->foreign('employee_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
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
