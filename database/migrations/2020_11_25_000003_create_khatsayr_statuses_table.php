<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateKhatsayrStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khatsayr_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('rang')->nullable();
            $table->string('class')->nullable();
            $table->string('order')->nullable();
        });

        DB::table('khatsayr_statuses')->insert(
            [
                'nom' => 'Новый',
                'rang' => 'secondary',
                'class' => 'default'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khatsayr_statuses');
    }
}
