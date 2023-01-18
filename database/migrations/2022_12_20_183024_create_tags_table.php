<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30);
            $table->string('_oldid', 30);
            $table->integer('_newid', true);
            $table->integer('story')->nullable()->index('FK_tags_stories');
            $table->string('storyid', 30);
            $table->string('value', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
