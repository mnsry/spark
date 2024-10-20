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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->foreign('parent_id')->references('id')->on('fields');
            $table->integer('order')->default(1);
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('form', [
                'TEXT', 'NUMBER', 'SELECT', 'MULTISELECT', 'CHECKBOX', 'RADIOBUTTON', 'TEXTAREA', 'IMAGE', 'MULTIIMAGE', 'VIDEO', 'FILE'
            ])->nullable()->default('TEXT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
