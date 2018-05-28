<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('keywords');
            $table->text('description');
            $table->string('name');
            $table->string('alias', 150)->unique();
            $table->text('previewdesc');
            $table->text('text');
            $table->string('img', 255)->nullable();
            $table->string('workstagesimg', 255)->nullable();
            $table->string('workstagestitle', 255);
            $table->text('workstagestext', 255);
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
        Schema::table('siteservices', function (Blueprint $table) {
            //
        });
    }
}
