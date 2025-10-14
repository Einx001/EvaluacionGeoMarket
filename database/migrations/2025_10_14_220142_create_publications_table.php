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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->text('titlePublication');
            $table->int('pricePublication');
            $table->text('descriptionPublication');
            $table->boolean('visibilityPublication');

            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->foreign('seller_id')
                ->references('id')
                ->on('sellers')->onDelete('set null');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
