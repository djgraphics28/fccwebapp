<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ci', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->string('passbooknumber');
            $table->integer('approved_by');
            $table->integer('status')->comment("1=active;0=inactive");
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
        Schema::dropIfExists('ci');
    }
}
