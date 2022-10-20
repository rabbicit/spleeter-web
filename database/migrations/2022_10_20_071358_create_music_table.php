<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid')->unsigned()->nullable();
            $table->string('name');
            $table->longText('image')->nullable();
            $table->string('filename');
            $table->string('downloadfiles');
            $table->string('downloadlimit')->nullable();
            $table->string('bpm');
            $table->string('key');
            $table->string('description')->nullable();
            $table->string('genre')->nullable();
            $table->string('price')->nullable();
            $table->string('ext_1')->nullable();
            $table->string('ext_2')->nullable();
            $table->string('ext_3')->nullable();
            $table->enum('category', ['Drums', 'Samples', 'Vocals', 'Instrumentals', 'Bass/808', 'SFX'])->default('Drums');
            $table->timestamps();
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
