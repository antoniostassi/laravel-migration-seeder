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
            $table->string('company', 30);
            $table->string('dep_station', 60);
            $table->string('arr_station', 60);
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->string('train_code', 5);
            $table->smallInteger('train_cabs_num')->nullable()->unsigned();
            $table->boolean('on_time')->default(false);
            $table->boolean('cancelled')->default(false);
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
