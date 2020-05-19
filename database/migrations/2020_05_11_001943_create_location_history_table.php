<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('device_id')
                ->nullable();

            $table->foreign('device_id')
                ->references('id')
                ->on('devices');

            $table->unsignedBigInteger('sector_id')
                ->nullable();

            $table->foreign('sector_id')
                ->references('id')
                ->on('sectors');

            $table->float('location_x');
            $table->float('location_y');
            $table->float('location_z');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_history');
    }
}
