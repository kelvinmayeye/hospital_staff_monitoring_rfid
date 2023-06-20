<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_card_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scanner_id');
            $table->foreign('scanner_id')->references('id')->on('card_scanners')->onDelete('cascade');
            $table->unsignedBigInteger('patient_card_id');
            $table->foreign('patient_card_id')->references('id')->on('patient_card')->onDelete('cascade');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_card_record');
    }
};
