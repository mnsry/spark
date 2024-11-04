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
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
            $table->integer('order')->default(1);
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('form', ['NULL', 'NUMBER', 'TEXT', 'TEXTAREA', 'SELECT', 'MULTISELECT', 'RADIOBUTTON', 'TIME', 'CHECKBOX', 'IMAGE', 'MULTIIMAGE', 'VIDEO', 'FILE'])->default('NULL');
            $table->boolean('option')->default(0);
            $table->timestamps();
            $table
                ->foreign('parent_id')
                ->references('id')
                ->on('fields')
                ->onDelete('cascade');
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
