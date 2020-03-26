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
            $table->date('start_date');
            $table->date('end_date');
            $table->char('mobile_no');
            $table->char('occupation');
            $table->longText('message');
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
