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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->boolean('stateComplaint');
            $table->text('descriptionComplaint');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('publication_id')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('user1s')->onDelete('set null');

            $table->foreign('publication_id')
                ->references('id')
                ->on('publications')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
