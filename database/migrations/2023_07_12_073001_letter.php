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
        Schema::create('letter_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('description');
            $table->string('letter_type');    //0 or 1  for incoming or outgoing letter
            $table->string('with_whom');      //investor or stakeholder  to identify communication with whom
            $table->timestamps();
        });



        Schema::create('letters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_code_id');
            $table->unsignedInteger('prepared_by')->nullable();
            $table->unsignedInteger('approved_by')->nullable();
            $table->unsignedInteger('stakeholder_sender_id')->nullable();
            $table->unsignedInteger('stakeholder_reciever_id')->nullable();
            $table->unsignedInteger('investment_sender_id')->nullable();
            $table->unsignedInteger('investment_reciever_id')->nullable();
            $table->string('ref_no');
            $table->boolean('view_status');
            $table->string('comment');
            $table->string('letter_path');
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('prepared_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stakeholder_sender_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('stakeholder_reciever_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('investment_sender_id')->references('id')->on('investments')->onDelete('cascade');
            $table->foreign('investment_reciever_id')->references('id')->on('investments')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('letter_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_id');
            $table->unsignedInteger('stakeholder_id')->nullable();
            $table->timestamps();
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
        });

        Schema::create('letter_code_stakeholders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_code_id');
            $table->unsignedInteger('stakeholder_id')->nullable();
            $table->unsignedInteger('added_by');
            $table->timestamps();
            $table->foreign('letter_code_id')->references('id')->on('letter_code')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('letter_template', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('letter_code_stackholder_id');
            $table->unsignedInteger('added_by');
            $table->string('subject');
            $table->timestamps();
            $table->foreign('letter_code_stackholder_id')->references('id')->on('letter_code_stakeholders')->onDelete('cascade');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('template_body', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('template_id');
            $table->text('description');
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
