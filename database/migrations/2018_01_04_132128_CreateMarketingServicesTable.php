<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketingservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('keywords');
            $table->text('description');
            $table->string('name');
            $table->string('alias', 150)->unique();
            $table->text('previewdesc');
            $table->text('text');
            $table->string('img', 255)->nullable();
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
        Schema::table('marketingservices', function (Blueprint $table) {
            //
        });
    }
}
