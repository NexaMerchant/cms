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
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('parent_id')->default(0);
            $table->integer('order')->default(0);
            $table->integer('status')->default(1);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted_by')->default(0);
            $table->softDeletes();
            $table->integer('deleted_at')->nullable();
            $table->timestamps();
        });

        // create cms categories translations table
        Schema::create('cms_categories_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('cms_category_id');
            $table->string('locale');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        // create cms tags table
        Schema::create('cms_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('status')->default(1);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted_by')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        // create cms tags translations table
        Schema::create('cms_tags_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('cms_tag_id');
            $table->string('locale');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        // create cms posts table
        Schema::create('cms_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->integer('status')->default(1);
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted_by')->default(0);
            $table->softDeletes();
            $table->integer('deleted_at')->nullable();
            $table->integer('category_id');
            $table->integer('featured')->default(0);
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('shares')->default(0);
            $table->integer('comments')->default(0);
            $table->integer('published_at')->nullable();
            $table->timestamps();
        });

        // create cms posts translations table
        Schema::create('cms_posts_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('cms_post_id');
            $table->string('locale');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
        Schema::dropIfExists('cms_post_meta');
        Schema::dropIfExists('cms_categories');
        Schema::dropIfExists('cms_categories_translations');
        Schema::dropIfExists('cms_tags');
        Schema::dropIfExists('cms_tags_translations');
        Schema::dropIfExists('cms_posts');
        Schema::dropIfExists('cms_posts_translations');

    }
};
