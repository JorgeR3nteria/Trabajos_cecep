<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string ('document_number',15)->nullable()->unique();
            $table->string ('first_name',50)->nullable();
            $table->string ('last_name',50)->nullable();
            $table->string ('address');
            $table->date('birthdate');
            $table->string ('phone_number',16);
            $table->string ('email',100);
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
        Schema::dropIfExists('customers');
    }
};
