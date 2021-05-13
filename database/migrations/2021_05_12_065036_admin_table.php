<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->text('username');
            $table->text('password');
            $table->timestamps();
        });

        DB::table('admin')->insert(
            array(
                'username' => 'admin',
                'password' => Hash::make('adminpass')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
