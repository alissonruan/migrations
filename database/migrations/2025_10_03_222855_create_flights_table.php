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
        Schema::create('flights', function (Blueprint $table) {
            $table->string('name')->not_null->string(250);
            $table->string('url_prefix')->not_null->string(250);
            $table->string('version')->nullable->string(11);
            $table->string('url_documentation')->nullable->string(250);
            $table->string('discription')->text->nullable;
            $table->string('created_at')->timestamp->nullable;
            $table->string('uploated_at')->timestamp->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
