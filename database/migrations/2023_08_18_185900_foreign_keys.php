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
        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('added_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('user_image', function (Blueprint $table) {
            $table->foreign('approved_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });


        Schema::table('permissions', function (Blueprint $table)
        {
            $table->foreign('group_id')->references('id')->on('permission_group')->onDelete('cascade');
        });

        Schema::table('roles', function (Blueprint $table)
        {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('role_permissions', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_permissions', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('sidebar_menu_item', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('sidebar_menu')->onDelete('cascade');
        });



        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('customer_files', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers');
        });

        Schema::table('customer_visa', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });




        Schema::table('stakeholders', function (Blueprint $table) {
            $table->foreign('main_id')->references('id')->on('main_stakeholders')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('region', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('zone', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('region')->onDelete('cascade');
        });

        Schema::table('woreda', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('zone_id')->references('id')->on('zone')->onDelete('cascade');
        });

        Schema::table('business_type', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('visa_type', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('measurement_unit', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('item_reg_request', function (Blueprint $table) {
            $table->foreign('sent_by')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::table('payment_cases', function (Blueprint $table) {
            $table->foreign('amount_set_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('payment', function (Blueprint $table) {
            $table->foreign('case_id')->references('id')->on('payment_cases')->onDelete('cascade');
            $table->foreign('payer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('payed_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('cashier_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });


        Schema::table('investment_type', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('document_type', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('investment_type_documents', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('document_type_id')->references('id')->on('document_type')->onDelete('cascade');
        });


        Schema::table('investments', function (Blueprint $table) {
            $table->foreign('business_type_id')->references('id')->on('investment_type')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('license_prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_changed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_type_id')->references('id')->on('investment_type')->onDelete('cascade');
        });



        Schema::table('company_name', function (Blueprint $table) {
            $table->foreign('sent_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('viewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });

        Schema::table('investment_detail', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });

        Schema::table('investment_activities', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });


        Schema::table('investment_address', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });

        Schema::table('annual_production', function (Blueprint $table)
        {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
        });

        Schema::table('raw_materials', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('measurement_id')->references('id')->on('measurement_unit')->onDelete('cascade');
        });

        Schema::table('impact_and_mitigation', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });

        Schema::table('shareholders', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::table('company_Representative', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('representative_id')->references('id')->on('users')->onDelete('cascade');
        });



        Schema::table('investement_documents', function (Blueprint $table) {
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });


        Schema::table('notarization_of_memorandum', function (Blueprint $table) {


            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('authenticated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');


        });


        Schema::table('memorandum_sign', function (Blueprint $table) {

            $table->foreign('memorandum_id')->references('id')->on('notarization_of_memorandum')->onDelete('cascade');
            $table->foreign('shareholder_id')->references('id')->on('Customers')->onDelete('cascade');
        });




        Schema::table('land_notarization', function (Blueprint $table) {


            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('authenticated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');


        });


        Schema::table('land_notarization_sign', function (Blueprint $table) {

            $table->foreign('shareholder_id')->references('id')->on('Customers')->onDelete('cascade');
            $table->foreign('notarization_id')->references('id')->on('land_notarization')->onDelete('cascade');

        });


        Schema::table('investment_employee', function (Blueprint $table) {

            $table->foreign('employee_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
        });


        Schema::table('letter_code', function (Blueprint $table)
        {
            $table->foreign('template_added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('template_updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('letter_code_cc', function (Blueprint $table)
        {
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('main_stakeholder_id')->references('id')->on('main_stakeholders')->onDelete('cascade');
        });




        Schema::table('letters', function (Blueprint $table) {

            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('initialized_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stakeholder_sender_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('stakeholder_reciever_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_sender_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('investment_reciever_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('investor_sender_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('investor_reciever_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('archiever_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('viewed_by')->references('id')->on('users')->onDelete('cascade');
        });



        Schema::table('letter_body', function (Blueprint $table) {
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
        });





        Schema::table('letter_copy', function (Blueprint $table) {
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('customers')->onDelete('cascade');
        });




        Schema::table('letter_template', function (Blueprint $table) {
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('template_body', function (Blueprint $table) {
            $table->foreign('template_id')->references('id')->on('letter_template')->onDelete('cascade');
        });


        Schema::table('vip_service_type', function (Blueprint $table) {
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('vip_service', function (Blueprint $table) {

            $table->foreign('service_type_id')->references('id')->on('vip_service_type')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::table('vip_service_letters', function (Blueprint $table) {

            $table->foreign('vip_service_id')->references('id')->on('vip_service')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');

        });


        Schema::table('other_visa', function (Blueprint $table) {

            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');

        });


        Schema::table('visa_request', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('pm_approved_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('converting_visa_type_id')->references('id')->on('visa_type')->onDelete('cascade');
        });



        Schema::table('work_permit_request', function (Blueprint $table) {

            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('pm_approved_by')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');

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
