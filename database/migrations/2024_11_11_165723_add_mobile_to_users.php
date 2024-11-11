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
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile',14)->unique()->nullable()->after('email');
            $table->unsignedBigInteger('user_id')->nullable()->default(null)->after('role_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function ($table) {
                $table->dropColumn('mobile');
                $table->dropColumn('user_id');
            });
        });
    }
};
