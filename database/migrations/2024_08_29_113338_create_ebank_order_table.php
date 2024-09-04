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
        Schema::create('ebank_orders', function (Blueprint $table) {
            $table->id();
            
            $table->integer('user_id');
            $table->integer('ebank_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ebank_id')->references('id')->on('ebanks')->onDelete('cascade');
            $table->string('name');
            $table->integer('count');
            $table->integer('price');
            $table->string('mobile');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ebank_orders');
    }
};
