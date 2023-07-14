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
        Schema::create('region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');    // Code for regions
            $table->string('type');    // chartered_city or regional_state
            $table->unsignedInteger('created_by');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('zone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('region_id');    // Code for regions
            $table->unsignedInteger('created_by');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('region')->onDelete('cascade');
        });

        Schema::create('woreda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('zone_id');    // Code for regions
            $table->unsignedInteger('created_by');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('zone_id')->references('id')->on('zone')->onDelete('cascade');
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
