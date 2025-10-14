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
        Schema::create('user1s', function (Blueprint $table) {
            $table->id();
            $table->text('nameUser');
            $table->text('seccondNameUser');
            $table->text('firtsLastNameUser');
            $table->text('seccondLastNameUser');
            $table->text('emailUser');
            $table->text('passwordUser');
            $table->boolean('activeUser');

            $table->unsignedBigInteger('rol_id')->nullable();

            $table->foreign('rol_id')
                ->references('id')
                ->on('rols')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1s');
    }
};
