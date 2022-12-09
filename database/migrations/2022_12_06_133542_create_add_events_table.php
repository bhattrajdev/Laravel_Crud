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
        Schema::create('add_events', function (Blueprint $table) {
            $table->id();
            $table->string('title','255');
            $table->string('date');
            $table->string('slug','255');
            $table->string('status','255');
            $table->string('meta','255');
            $table->string('image','255');
            $table->string('description','255');
            $table->string('video','255');
            $table->string('intro_text','255');
            $table->string('details','255');
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
        Schema::dropIfExists('add_events');
    }
};
