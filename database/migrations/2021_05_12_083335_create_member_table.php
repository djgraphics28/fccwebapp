<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname')->nullable()->default(null);
            $table->string('ename')->nullable()->default(null);
            $table->string('gender', 10)->nullable()->default(null);
            $table->date('birthdate')->nullable()->default(null);
            $table->string('placeofbirth')->nullable()->default(null);
            $table->integer('civil_status')->nullable()->default(null);
            $table->string('occupation')->nullable()->default(null);
            $table->string('contactnumber')->nullable()->default(null);
            $table->integer('validno')->nullable()->default(null);
            $table->integer('tin')->nullable()->default(null);
            $table->string('unique_id_num', 50);
            $table->string('street')->nullable()->default(null);
            $table->string('barangay')->nullable()->default(null);
            $table->string('municipality')->nullable()->default(null);
            $table->string('province')->nullable()->default(null);
            $table->string('areatilage')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('othersource')->nullable()->default(null);
            $table->string('tenurialstatus')->nullable()->default(null);
            $table->string('passbooknumber')->nullable()->default(null);
            $table->string('emailaddress')->nullable()->default(null);
            $table->string('ornumber')->nullable()->default(null);
            $table->string('profile_pic')->nullable()->default(null);
            $table->integer('status')->nullable()->default(1)->comment("1=active;0=inactive");
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
        Schema::dropIfExists('member');
    }
}
