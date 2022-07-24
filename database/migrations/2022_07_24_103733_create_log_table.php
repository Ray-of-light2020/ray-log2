<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_conditions', function (Blueprint $table) {
            $table->id();
            $table->float('size');
            $table->float('thickness');
            $table->string('shooting_method');
            $table->float('ci');
            $table->integer('sfd');
            $table->float('irradiation_time');
            $table->float('d_u');
            $table->float('d_l');
            $table->string('film');
            $table->integer('deverop_time');
            $table->integer('deverop_temp');
            $table->string('remarks');
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
        Schema::dropIfExists('log');
    }
};
