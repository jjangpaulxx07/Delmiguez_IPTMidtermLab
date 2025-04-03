<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary Key, Auto-increment
            $table->string('name'); // Required
            $table->text('description')->nullable(); // Nullable
            $table->decimal('price', 8, 2); // Required
            $table->integer('quantity')->default(0); // Required, Default: 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Corrected table name
    }
}
