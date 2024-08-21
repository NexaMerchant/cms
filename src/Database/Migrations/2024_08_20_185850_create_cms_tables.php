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
        // create cms main table
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('author');
            $table->string('email');
            $table->text("content");
            $table->string("slug")->unique()->comment('The slug of the cms');
            $table->timestamps();
        });

        // create cms post meta table
        Schema::create('cms_post_meta', function (Blueprint $table) {
            $table->id();
            $table->integer('cms_post_id');
            $table->string('meta_key');
            $table->text('meta_value');
            $table->timestamps();
        });

        // create cms categories table
        Schema::create('cms_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // create cms categories translations table
        Schema::create('cms_categories_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // create cms tags table
        Schema::create('cms_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // create cms tags translations table
        Schema::create('cms_tags_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // create cms posts table
        Schema::create('cms_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // create cms posts translations table
        Schema::create('cms_posts_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
    }
};
