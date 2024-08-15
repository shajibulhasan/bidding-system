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
            $table->date('starting_date');
            $table->date('ending_date');
            $table->string('image');
            $table->string('status')->default('Not Approve');
            $table->string('delivery_status')->default('Pending');
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('bidder_id')->nullable(); 
            $table->foreign('bidder_id')->references('id')->on('users');       
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
