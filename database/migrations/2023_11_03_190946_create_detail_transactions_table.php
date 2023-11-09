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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transactionId')->constrained('transactions')->onDelete('cascade');
            $table->foreignId('collectionId')->constrained('collections')->onDelete('cascade');
            $table->date('tanggalKembali');
            $table->tinyInteger('status');
            $table->String('keterangan', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transactions');
    }
};
