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
        Schema::create('app_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id');
            $table->integer('user_id');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('count');
            $table->integer('price');
            $table->string('note')->nullable();
            $table->string('player_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_orders');
    }
};
