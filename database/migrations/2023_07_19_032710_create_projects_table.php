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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // $table->string('image');
            // $table->string('image2')->nullable();
            // $table->string('image3')->nullable();
            // $table->string('image4')->nullable();
            // $table->string('image5')->nullable();
            $table->string('title');
            $table->integer('category')->nullable();
            $table->string('link')->nullable();
            $table->longText('desc');
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
        Schema::dropIfExists('projects');
    }
};
