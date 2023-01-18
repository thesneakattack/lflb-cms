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
        Schema::create('metaData', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30);
            $table->string('_oldid', 30);
            $table->integer('_newid', true);
            $table->string('contributor', 20)->nullable();
            $table->string('creator', 30)->nullable();
            $table->string('description', 10)->nullable();
            $table->string('format', 10)->nullable();
            $table->string('identifier', 10)->nullable();
            $table->string('language', 10)->nullable();
            $table->string('publisher', 20)->nullable();
            $table->string('relation', 10)->nullable();
            $table->string('rights', 10)->nullable();
            $table->string('source', 30)->nullable();
            $table->string('subject', 10)->nullable();
            $table->string('type', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metaData');
    }
};
