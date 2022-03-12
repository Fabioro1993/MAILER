<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password'); //mínimo de 8 caracteres, debe contener al menos un número,una letra mayúscula, un carácter especial
            $table->string('name', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('id_card', 11);
            $table->timestamp('birthday'); //mayor de 18 años
            $table->integer('postal_code');

            $table->unsignedBigInteger('municipalities_id')->nullable();
            $table->foreign('municipalities_id')->references('id')->on('municipalities');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
