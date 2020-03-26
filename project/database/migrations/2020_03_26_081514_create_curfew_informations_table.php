<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurfewInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curfew_informations', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->string('email')->unique();
            $table->date('date');
            $table->char('mobile_no');
            $table->char('occupation');
            $table->longText('message');
            $table->enum('status',[0,1])->default(0);
            $table->uuid('device_id')->nullable();
            $table->string('image');
            $table->string('aadhar_image');
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
        Schema::dropIfExists('curfew_information');
    }
}
