<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_balance', function (Blueprint $table) {
            $table->id();
            $table->string('type', 255);
            $table->string('no_lot', 255);
            $table->string('material_name', 255);
            $table->integer('quantity');
            $table->string('description', 255);
            $table->string('item_number', 255);
            $table->string('search_name', 255);
            $table->integer('balance');
            $table->enum('category', ['pending', 'over-material'])->default('over-material');
            $table->enum('status', ['ok', 'ng'])->default('ok');
            $table->string('pic', 255);
            $table->string('leader_confirmation', 255)->nullable();

            // Kolom tambahan
            $table->timestamps(); // created_at & updated_at otomatis
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_balance');
    }
};
