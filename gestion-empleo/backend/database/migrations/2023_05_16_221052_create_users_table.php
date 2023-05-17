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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("role_id")->nullable();
            $table->unsignedBigInteger("country_id")->nullable();
            $table->unsignedBigInteger("city_id")->nullable();
            $table->unsignedBigInteger("neighborhood_id")->nullable();
            $table->unsignedBigInteger("eps_id")->nullable();
            $table->string('name', 30);
            $table->string('lastname', 30);
            $table->string('email');
            $table->string('address');
            $table->string('mobile');
            $table->string('password');
            //$table->rememberToken();
            $table->timestamps();

            $table->foreign("role_id")->references("id")->on("roles")->onDelete("cascade");
            $table->foreign("country_id")->references("id")->on("countrys")->onDelete("cascade");
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade");
            $table->foreign("neighborhood_id")->references("id")->on("neighborhoods")->onDelete("cascade");
            $table->foreign("eps_id")->references("id")->on("eps")->onDelete("cascade");
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
