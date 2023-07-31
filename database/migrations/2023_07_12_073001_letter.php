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
        //LETTER_CODE
        Schema::create('letter_code', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('description');
            $table->string('letter_type');    //incoming or outgoing
            $table->string('with_whom');      //investor or stakeholder or investment  to identify communication with whom
            $table->timestamps();
        });



        Schema::create('letters', function (Blueprint $table) {

            $table->increments('id');

            $table->string('letter_identifier')->unique();

            $table->unsignedInteger('letter_code_id');


            $table->unsignedInteger('stakeholder_sender_id')->nullable();
            $table->unsignedInteger('stakeholder_reciever_id')->nullable();
            $table->unsignedInteger('investment_sender_id')->nullable();
            $table->unsignedInteger('investment_reciever_id')->nullable();
            $table->unsignedInteger('investor_sender_id')->nullable();
            $table->unsignedInteger('investor_reciever_id')->nullable();


            $table->boolean('is_prepared')->default(0);


            $table->unsignedInteger('initialized_by')->nullable();

            $table->unsignedInteger('prepared_by')->nullable();

            $table->unsignedInteger('updated_by')->nullable();

            $table->string('create_style')->nullable();

            $table->unsignedInteger('approved_by')->nullable();


            $table->string('sent_date')->nullable();
            $table->string('ref_no')->nullable();

            $table->string('subject')->nullable();
            $table->string('conclusion')->nullable();

            $table->boolean('status')->default(0);
            $table->unsignedInteger('archiever_id')->nullable();



            $table->boolean('view_status');
            $table->string('comment');
            $table->string('letter_path');

            $table->unsignedInteger('viewed_by')->nullable();

            $table->timestamps();

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



        Schema::create('letter_body', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_id');
            $table->text('content');
            $table->text('content_type'); // paragraph or table
            $table->timestamps();
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
        });





        Schema::create('letter_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('stakeholder_id')->nullable();
            $table->unsignedInteger('investment_id')->nullable();
            $table->unsignedInteger('investor_id')->nullable();
            $table->timestamps();
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('customers')->onDelete('cascade');
        });




        Schema::create('letter_template', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_code_id');
            $table->string('description');
            $table->unsignedInteger('added_by');
            $table->unsignedInteger('updated_by');
            $table->string('subject');
            $table->string('conclusion');
            $table->timestamps();
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('template_body', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('template_id');
            $table->string('content_type');
            $table->text('content');
            $table->timestamps();
            $table->foreign('template_id')->references('id')->on('letter_template')->onDelete('cascade');
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
