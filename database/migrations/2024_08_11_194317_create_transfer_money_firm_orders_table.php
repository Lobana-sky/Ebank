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
        Schema::create('transfer_money_firm_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('transfer_money_firm_id');
            $table->integer('user_id');
            $table->foreign('transfer_money_firm_id')->references('id')->on('transfer_money_firms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('sender');
            $table->integer('value');
            $table->string('currency');
            $table->integer('dekont_no');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_money_firm_orders');
    }
};
