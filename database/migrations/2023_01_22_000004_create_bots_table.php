<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotsTable extends Migration
{
    public function up()
    {
        Schema::create('bots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('modello')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
