<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhatsayrhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khatsayrho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('az_kujo');
            $table->string('ba_kujo');
            $table->integer('masofa');
            $table->dateTime('vaqti_raftan');
            $table->dateTime('vaqti_rasidan');
            $table->dateTime('vaqti_bargashtan');
            $table->integer('autobus_id')->unsigned();
            $table->integer('ronanda_id')->unsigned();
            $table->integer('nozir_id')->unsigned();
            $table->integer('khatsayr_status_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('autobus_id')
                ->references('id')
                ->on('autobusho')
                ->onDelete('cascade');

            $table->foreign('ronanda_id')
                ->references('id')
                ->on('ronandagon')
                ->onDelete('cascade');

            $table->foreign('nozir_id')
                ->references('id')
                ->on('noziron')
                ->onDelete('cascade');

            $table->foreign('khatsayr_status_id')
                ->references('id')
                ->on('khatsayr_statuses')
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
        Schema::dropIfExists('khatsayrho');
    }
}
