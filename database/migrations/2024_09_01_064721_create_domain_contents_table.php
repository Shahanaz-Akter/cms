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
        Schema::create('domain_contents', function (Blueprint $table) {
            $table->id();
            $table->string('domain_id')->nullable();
            $table->string('title')->nullable();
            $table->string('h1_title')->nullable();
            $table->string('h1_des')->nullable();
            $table->string('h2_title')->nullable();
            $table->string('h2_des')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_contents');
    }
};
