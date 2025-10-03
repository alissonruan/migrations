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
        Schema::create('plan_room', function (Blueprint $table) {
            $table->foreignId('plan_id')->references('id')->on('plans')->onDelete('cascade')->onUpdate('no action');
            $table->foreignId('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_room');
    }
};
