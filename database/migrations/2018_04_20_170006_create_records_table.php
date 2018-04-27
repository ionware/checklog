<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fullname');
            $table->string('dob');
            $table->string('gender');
            $table->string('marital_status')->nullable();
            $table->string('state_birth');
            $table->string('state_origin');
            $table->string('maiden_name')->nullable();
            $table->string('kin_name');
            $table->string('kin_relationship')->nullable();
            $table->string('kin_telephone')->nullable();
            $table->string('profession')->nullable();
            $table->string('telephone_1');
            $table->string('telephone_2')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('home_address')->nullable();
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
        Schema::dropIfExists('records');
    }
}
