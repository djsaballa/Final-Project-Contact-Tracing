<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->string('qr_code')->unique();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('address');
            $table->bigInteger('phone_number')->unique();
            $table->bigInteger('body_temp');
            $table->bigInteger('age');
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
        Schema::dropIfExists('user_info');
    }
}
