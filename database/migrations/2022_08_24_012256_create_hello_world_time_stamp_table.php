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
        Schema::create('hello_world_time_stamp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->timestamps();
        });

        Schema::table('hello_world_time_stamp', function (Blueprint $table) {
            $table->dropColumn(['updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
