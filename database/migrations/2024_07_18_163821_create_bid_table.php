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
        Schema::create('bid', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('starting_price');
            $table->string('ending_price')->default('Not start');
            $table->string('starting_date');
            $table->string('ending_date');
            $table->string('status')->default('Not Approve');
            $table->foreignId('user_id');
            $table->foreignId('bidder_id')->nullable();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid');
    }
};
