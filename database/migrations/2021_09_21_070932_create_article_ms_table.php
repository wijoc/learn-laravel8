<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_ms', function (Blueprint $table) {
            $table->id();
            $table->string('a_title');
            $table->string('a_slug')->unique();
            $table->text('a_excerpt');
            $table->text('a_body');
            $table->string('a_author');
            $table->timestamp('a_published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_ms');
    }
}
