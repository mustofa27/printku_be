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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total_price');
            $table->dateTime('cod_time');
            $table->enum('status',['Submitted','On Process','Delivered']);
            $table->bigInteger('commission');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('petugas_id')->constrained('users','id');
            $table->foreignId('configuration_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
