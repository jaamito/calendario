<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Porcentages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barris');
            $table->string('poblacio');
            $table->string('gener');
            $table->string('febrer');
            $table->string('marz');
            $table->string('abril');
            $table->string('maig');
            $table->string('juny');
            $table->string('juliol');
            $table->string('agost');
            $table->string('setembre');
            $table->string('octubre');
            $table->string('novembre');
            $table->string('desembre');

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
        Schema::dropIfExists('Por');
    }
}
