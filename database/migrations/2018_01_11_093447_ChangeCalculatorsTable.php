<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calculators', function (Blueprint $table) {
            $table->integer('marketing_service_id')->unsigned()->default(1);
            $table->foreign('marketing_service_id')->references('id')->on('marketingservices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calculators', function (Blueprint $table) {
            //
        });
    }
}
