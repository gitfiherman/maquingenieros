<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ape_pat',50);
            $table->string('ape_mat',50);
            $table->string('nom_com',150);
            $table->string('usuario',50)->unique();            
            $table->string('email',80);
            $table->string('rol',15);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
