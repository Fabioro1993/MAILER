<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\AdminSeeder;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name', 100);
            $table->string('phone', 10)->nullable();
            $table->string('id_card', 11);
            $table->date('birthday');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Artisan::call('db:seed', [ '--class' => AdminSeeder::class,]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
