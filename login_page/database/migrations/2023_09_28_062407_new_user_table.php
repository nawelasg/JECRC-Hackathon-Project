<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('new_user_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fathername');
            $table->string('aadhar')->unique();
            $table->string('district');
            $table->string('address of incident');
            $table->string('city');
            $table->string('state');
            $table->string('phoneNo')->unique();
            $table->string('nationality')->unique();
            $table->string('altPhoneNo');
            $table->rememberToken();
            $table->timestamps();
            $table->string('f');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('users');
    }
};
