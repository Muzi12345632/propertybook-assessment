<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\services;
use App\Models\pricing;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //create roles table

        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->text('text');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });


        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('package');
            $table->string('price');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();


            //$table->fullText('price');
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
