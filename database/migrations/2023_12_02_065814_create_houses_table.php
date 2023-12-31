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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('house_name');
            $table->string('address')->nullable();
            $table->integer('number_of_bedrooms')->nullable();
            $table->integer('area_bedrooms')->nullable();
            $table->decimal('area', 12, 2)->nullable();
            $table->decimal('rent_price', 12, 2)->nullable();
            $table->longtext('content')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->json('images')->nullable();
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
        Schema::dropIfExists('houses');
    }
};
