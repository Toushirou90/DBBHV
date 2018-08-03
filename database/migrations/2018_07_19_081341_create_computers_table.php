<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('pc_id');
            $table->string('rechnername');
            $table->string('hersteller');
            $table->string('model');
            $table->string('institut');
            $table->string('ip');
            $table->string('macadresse');
            $table->string('raum');
            $table->string('dose');
            $table->string('nutzer');
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
        Schema::dropIfExists('computers');
    }
}
