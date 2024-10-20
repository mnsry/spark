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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            //ایدی کاربر
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // ایدی دسته بندی
            $table->integer('category_id')->unsigned()->nullable()->default(null);
            $table->foreign('category_id')->references('id')->on('categories');
            // آیدی فیلد
            $table->integer('sen_bana')->unsigned()->nullable()->default(null);
            $table->foreign('sen_bana')->references('parent_id')->on('fields');
            $table->integer('tabaghe')->unsigned()->nullable()->default(null);
            $table->foreign('tabaghe')->references('parent_id')->on('fields');
            $table->integer('kol_vahed')->unsigned()->nullable()->default(null);
            $table->foreign('kol_vahed')->references('parent_id')->on('fields');
            $table->integer('otagh')->unsigned()->nullable()->default(null);
            $table->foreign('otagh')->references('parent_id')->on('fields');
            $table->integer('sanad')->unsigned()->nullable()->default(null);
            $table->foreign('sanad')->references('parent_id')->on('fields');
            $table->integer('kafpoosh')->unsigned()->nullable()->default(null);
            $table->foreign('kafpoosh')->references('parent_id')->on('fields');
            $table->integer('jahat')->unsigned()->nullable()->default(null);
            $table->foreign('jahat')->references('parent_id')->on('fields');
            $table->integer('kabinet')->unsigned()->nullable()->default(null);
            $table->foreign('kabinet')->references('parent_id')->on('fields');
            $table->integer('hot')->unsigned()->nullable()->default(null);
            $table->foreign('hot')->references('parent_id')->on('fields');
            $table->integer('mahal')->unsigned()->nullable()->default(null);
            $table->foreign('mahal')->references('parent_id')->on('fields');
            // گوگل
            $table->string('slug')->unique()->nullable();
            $table->string('seo_title')->nullable()->default('املاک جرقه');
            $table->string('meta_description')->nullable()->default('املاک جرقه');
            $table->string('meta_keywords')->nullable()->default('املاک جرقه');
            // کاراکتر
            $table->string('image')->nullable()->default('files/default.png');
            $table->string('video')->nullable()->default('posts/default.mp4');
            $table->string('address')->nullable();
            $table->string('emtiyza')->nullable();
            $table->string('more')->nullable();
            // انتخاب آیتم
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            // مقدار اعدادی
            $table->integer('price')->nullable()->default(0);
            $table->integer('rahn')->nullable()->default(0);
            $table->integer('ejare')->nullable()->default(0);
            $table->integer('metr')->nullable()->default(0);
            $table->integer('metr_zamin')->nullable()->default(0);
            $table->integer('shekar')->nullable()->default(0);
            $table->integer('like')->nullable()->default(0);
            // مقادیر هست و نیست
            $table->boolean('elvator')->default(0);
            $table->boolean('anbari')->default(0);
            $table->boolean('balkon')->default(0);
            $table->boolean('parking')->default(0);
            $table->boolean('farangi')->default(0);
            $table->boolean('moaveze')->default(0);
            $table->boolean('bazsazi')->default(0);
            $table->boolean('cooler')->default(0);
            $table->boolean('water_hot')->default(0);
            // زمان ها
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
