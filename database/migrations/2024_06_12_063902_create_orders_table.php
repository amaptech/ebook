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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('bookid')->nullable();
            $table->string('username')->nullable();
            $table->string('bookname')->nullable();
            $table->string('bookimg')->nullable();
            $table->string('bookfile')->nullable();
            $table->string('bookauthor')->nullable();
            $table->string('bookprice')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
