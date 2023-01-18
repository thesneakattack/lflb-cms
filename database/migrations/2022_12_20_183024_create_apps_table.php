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
        Schema::create('apps', function (Blueprint $table) {
            $table->comment('');
            $table->string('_id', 30);
            $table->string('_oldid', 30);
            $table->integer('_newid', true);
            $table->string('name', 80);
            $table->string('orgId', 30);
            $table->text('description')->nullable();
            $table->string('image', 80);
            $table->text('collections')->nullable();
            $table->string('mapCenterAddress', 60)->nullable();
            $table->string('mapCenterAddressCoords_lat', 20)->nullable();
            $table->string('mapCenterAddressCoords_lng', 20)->nullable();
            $table->string('mainColor', 10);
            $table->string('secondaryColor', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
};
