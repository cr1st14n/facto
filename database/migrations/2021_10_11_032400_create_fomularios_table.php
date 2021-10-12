<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFomulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fomularios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('f1',5)->nullable();
            $table->string('f2',5)->nullable();
            $table->string('f3',5)->nullable();
            $table->string('f4',5)->nullable();
            $table->string('f5',5)->nullable();
            $table->string('f6',5)->nullable();
            $table->string('f7',5)->nullable();
            $table->string('f8',5)->nullable();
            $table->string('f9',5)->nullable();
            $table->string('f10',5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fomularios');
    }
}
