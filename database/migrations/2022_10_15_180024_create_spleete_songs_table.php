<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpleeteSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spleete_songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('filepath');
            $table->string('filename');
            $table->string('exportname');
            $table->string('downloadfiles');
            $table->string('empty');
            $table->enum('stems', ['2', '4', '5'])->default('5');
            $table->bigInteger('uid')->unsigned()->nullable();
            $table->string('userip');
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
        Schema::dropIfExists('spleete_songs');
    }
}
