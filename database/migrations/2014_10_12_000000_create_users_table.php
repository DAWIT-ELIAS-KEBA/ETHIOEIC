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
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('last_login')->nullable();
            $table->string('user_type')->default('investor');
            $table->string('signature')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedInteger('added_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('statusChangedBy')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('added_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('statusChangedBy')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('user_image', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('user_id');
            $table->string('approved_photo')->nullable();
            $table->string('uploaded_photo')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->date('last_approve')->nullable();
            $table->string('comment');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('approved_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });





        Schema::create('permission_group', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('group_name')->unique();
            $table->integer('order_num');
            $table->timestamps();
        });


        Schema::create('permissions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->integer('order_num');
            $table->unsignedInteger('group_id');
            $table->foreign('group_id')->references('id')->on('permission_group')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('user_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('user_id');
            $table->boolean('status')->default(1); // for permission that allowed or disallowed
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('sidebar_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('user_type');    // for users or investor
            $table->string('icon');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('sidebar_menu_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('menu_id');
            $table->unsignedInteger('permission_id')->nullable();
            $table->string('link');
            $table->string('item_code');
            $table->timestamps();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('sidebar_menu')->onDelete('cascade');
        });



        Schema::create('customers', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('user_id');
            $table->string('phone');
            $table->string('country');
            $table->string('country_type');
            $table->string('photo');
            $table->string('id_card')->nullable();
            $table->string('passport')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('customer_files', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('customer_id');
            $table->string('work_permit_file');
            $table->date('wp_expired_date');
            $table->boolean('wp_status');
            $table->string('investment_permit_file');
            $table->date('ip_expired_date');
            $table->boolean('ip_status');
            $table->string('residence_permit_file');
            $table->date('rp_expired_date');
            $table->boolean('rp_status');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();
        });

        Schema::create('customer_visa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->string('visa_file');
            $table->string('visa_type');                 //investment or work
            $table->string('visa_code')->nullable();
            $table->date('issued_date');
            $table->date('expired_date');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

        Schema::create('main_stakeholders', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('label');
            $table->timestamps();
        });


        Schema::create('stakeholders', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('main_id');
            $table->string('name')->unique();
            $table->string('address');
            $table->string('code');
            $table->string('api_link')->nullable();
            $table->string('api_token')->nullable();
            $table->string('key')->nullable();
            $table->string('data_format')->nullable();
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('main_stakeholders')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
