<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutobushoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autobusho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raqam', 10);
            $table->string('model');
            $table->smallInteger('joi_nishast');
            $table->integer('tashkilot_id')->unsigned();
            $table->timestamps();

            $table->foreign('tashkilot_id')
                ->references('id')
                ->on('tashkilot')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autobusho');
    }
}
