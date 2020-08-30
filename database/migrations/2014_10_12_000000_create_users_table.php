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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('avatar')->default('user.jpg');
            $table->string('address2')->nullable();
            $table->string('address')->nullable();
            $table->string('current_company')->nullable();
            $table->string('position_company')->nullable();
            $table->string('education')->nullable();
            $table->string('industry')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('zip');
            $table->boolean('is_featured')->default('1');
            $table->string('state')->nullable();
            $table->longText('about')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('primary_category');
            $table->string('secondary_category');
            $table->string('tertiary_category');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
