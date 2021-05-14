<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_qr', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2021_05_09_043732_user_qr_table.php
            $table->id();                     
=======
            $table->id();         
            $table->foreignId('user_info_qr_code')->constrained('user_info');
>>>>>>> 915891421d72b8de824b30808d99c6666a06f854:database/migrations/2021_05_09_043732_create_user_qr_table.php
            $table->string('qr');
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
        Schema::dropIfExists('user_qr');
    }
}