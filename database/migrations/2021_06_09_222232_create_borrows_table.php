<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->string('typeofloan');
            $table->string('typeofcashloan')->nullable()->default(null);
            $table->string('agri_item')->nullable()->default(null);
            $table->integer('qty')->nullable()->default(1);
            $table->string('unit')->nullable()->default(1)->comment("1=Kilogram;2=Bag");
            $table->integer('amount');
            $table->integer('totalamount')->nullable()->default(null);
            $table->integer('micro')->nullable()->default(null);
            $table->integer('days')->nullable()->default(30);
            $table->integer('interest')->default(20);
            $table->integer('user_id');
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
        Schema::dropIfExists('borrows');
    }
}
