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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 50);
            $table->string("station_of_departure", 100);
            $table->string("station_of_arrival", 100);
            $table->timestamp("departure_time");
            $table->timestamp("arrival_time");
            $table->string("train_code")->unique();
            $table->tinyInteger("number_of_carriage");
            $table->boolean("on_time");
            $table->boolean("is_deleted");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};