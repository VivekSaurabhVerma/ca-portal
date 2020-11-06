<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCa2020sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ca_2020s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('college')->nullable();
            $table->string('pincode')->nullable();
            $table->string('address')->nullable();
            $table->string('referral')->nullable();
            $table->integer('year')->nullable();
            $table->integer('num_referred')->default(0);
            $table->integer('num_referred_by')->default(0);
            $table->integer('points')->default(0);
            $table->string('certi_link')->nullable();
            $table->integer('no_of_login')->default(0);
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
        Schema::dropIfExists('ca_2020s');
    }
}
