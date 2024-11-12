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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade' );
            // ایدی دسته بندی
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            // آیدی فیلد موقعیت
            $table->integer('mahale')->unsigned()->nullable()->default(null);
            $table->foreign('mahale')->references('id')->on('fields');
            $table->string('address', 50)->nullable();
            // آیدی فیلد اطلاعات
            $table->integer('sanad')->unsigned()->nullable()->default(null);
            $table->foreign('sanad')->references('id')->on('fields');
            $table->integer('jahat')->unsigned()->nullable()->default(null);
            $table->foreign('jahat')->references('id')->on('fields');
            $table->integer('senbana')->unsigned()->nullable()->default(null);
            $table->foreign('senbana')->references('id')->on('fields');
            $table->integer('kolvahed')->unsigned()->nullable()->default(null);
            $table->foreign('kolvahed')->references('id')->on('fields');
            $table->string('vahed', 10)->nullable();
            $table->integer('tabaghat')->unsigned()->nullable()->default(null);
            $table->foreign('tabaghat')->references('id')->on('fields');
            $table->integer('tabaghe')->unsigned()->nullable()->default(null);
            $table->foreign('tabaghe')->references('id')->on('fields');
            // مقادیر هست و نیست
            $table->boolean('parking')->default(0);
            $table->boolean('anbari')->default(0);
            $table->boolean('elvator')->default(0);
            // مقدار اعدادی
            $table->integer('metrajzamin')->nullable()->default(0);
            $table->integer('metrajmaskoni')->nullable()->default(0);
            $table->integer('metrajtejari')->nullable()->default(0);
            $table->integer('metrajmohavate')->nullable()->default(0);
            $table->integer('metrajhashiye')->nullable()->default(0);
            $table->integer('metraj')->nullable()->default(0);
            $table->integer('metrajbana')->nullable()->default(0);
            $table->integer('metrajbalkon')->nullable()->default(0);
            $table->integer('metrajhayat')->nullable()->default(0);
            $table->integer('metrajzamin')->nullable()->default(0);
            $table->integer('metrajzamin')->nullable()->default(0);
            // آیدی فیلد اطلاعات
            $table->integer('otagh')->unsigned()->nullable()->default(null);
            $table->foreign('otagh')->references('id')->on('fields');
            // مقادیر هست و نیست
            $table->boolean('ashpazkhane')->default(0);
            // آیدی فیلد اطلاعات
            $table->integer('tovalet')->unsigned()->nullable()->default(null);
            $table->foreign('tovalet')->references('id')->on('fields');
            // آیدی فیلد امتیازات
            $table->json('tovalet')->unsigned()->nullable()->default(null);
            $table->foreign('tovalet')->references('id')->on('fields');
            






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

            $table->boolean('parking')->default(0);


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
