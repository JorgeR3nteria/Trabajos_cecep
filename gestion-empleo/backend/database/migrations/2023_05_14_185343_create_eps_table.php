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
        Schema::create('eps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("country_id")->nullable();
            $table->unsignedBigInteger("city_id")->nullable();
            $table->unsignedBigInteger("neighborhood_id")->nullable();
            $table->string("nameEps", 50);
            $table->string("address", 100);
            $table->string("email", 50);
            $table->string("mobile", 50);
            $table->timestamps();
            $table->foreign("country_id")->references("id")->on("countrys")->onDelete("cascade");
            $table->foreign("city_id")->references("id")->on("cities")->onDelete("cascade");
            $table->foreign("neighborhood_id")->references("id")->on("neighborhoods")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eps');
    }
};
