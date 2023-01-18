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
        Schema::create('assets', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30);
            $table->string('_oldid', 30);
            $table->integer('_newid', true);
            $table->string('orgId', 30);
            $table->string('link', 130)->nullable();
            $table->string('originalImage', 80)->nullable();
            $table->string('type', 10);
            $table->text('text');
            $table->text('cleanText');
            $table->string('name', 130)->nullable();
            $table->text('caption')->nullable();
            $table->string('tags', 50)->nullable();
            $table->string('thumbnail', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
