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
            $table->integer('noe_moamele')->unsigned()->nullable()->default(null);
            $table->foreign('noe_moamele')->references('parent_id')->on('categories')->onDelete('cascade');
            // مقدار اعدادی
            $table->integer('price')->nullable()->default(0);
            $table->integer('rahn')->nullable()->default(0);
            $table->integer('ejare')->nullable()->default(0);
            $table->integer('metr')->nullable()->default(0);
            $table->integer('metr_zamin')->nullable()->default(0);
            $table->integer('shekar')->nullable()->default(0);
            $table->integer('like')->nullable()->default(0);
            // کاراکتر
            $table->string('image')->nullable()->default('files/default.png');
            $table->string('video')->nullable()->default('posts/default.mp4');
            //$table->string('noe_moamele')->nullable();
            $table->string('noe_melk')->nullable();
            $table->string('mahal')->nullable();
            $table->string('address')->nullable();
            $table->string('otagh')->nullable();
            $table->string('sen_bana')->nullable();
            $table->string('tabaghe')->nullable();
            $table->string('kol_vahed')->nullable();
            $table->string('sanad')->nullable();
            $table->string('kabinet')->nullable();
            $table->string('jahat')->nullable();
            $table->string('hot')->nullable();
            // متن جیسون
            $table->text('emtiyza')->nullable()->default(null);
            // گوگل
            $table->string('slug')->unique()->nullable();
            $table->string('seo_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            // انتخاب آیتم
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
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
