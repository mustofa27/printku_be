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
        Schema::create('print_files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->integer('page_count');
            $table->integer('copy_count');
            $table->bigInteger('price');
            $table->foreignId('print_type_id')->constrained();
            $table->foreignId('transaction_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('print_files');
    }
};
