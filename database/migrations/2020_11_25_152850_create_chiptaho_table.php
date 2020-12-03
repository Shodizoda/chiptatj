<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiptahoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiptaho', function (Blueprint $table) {
            $table->increments('id');
            $table->double('narkh');
            $table->string('joi_nishast');
            $table->string('nomu_nasab');
            $table->dateTime('vagti_kharid');
            $table->string('raqami_shinosnoma');
            $table->integer('khatsayr_id')->unsigned();
            $table->integer('chipta_status_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('khatsayr_id')
                ->references('id')
                ->on('khatsayrho')
                ->onDelete('cascade');

            $table->foreign('chipta_status_id')
                ->references('id')
                ->on('chipta_statuses')
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
        Schema::dropIfExists('chitaho');
    }
}
