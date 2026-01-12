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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('product_name');
            $table->decimal('price', 10, 2);
            $table->integer('stock')->dafault(0);
            $table->date('expiry_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('max_qty')->default(2);
            $table->string('image')->nullable();
            $table->enum('active', ['yes', 'no'])->default('yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
