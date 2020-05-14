<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors_routers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('sector_id');

            $table->foreign('sector_id')
                ->references('id')
                ->on('sectors');

            $table->unsignedBigInteger('router_id');

            $table->foreign('router_id')
                ->references('id')
                ->on('routers');


            $table->float('router_horizontal');
            $table->float('router_vertical');

            $table->unique(['sector_id', 'router_id'], 'sector_router_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors_routers');
    }
}
