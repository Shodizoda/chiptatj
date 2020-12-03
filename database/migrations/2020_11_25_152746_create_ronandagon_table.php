<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRonandagonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ronandagon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomu_nasab');
            $table->date('soli_tavallud');
            $table->string('hujati_ronandagi');
            $table->string('raghami_telefon');
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
        Schema::dropIfExists('ronandagon');
    }
}
