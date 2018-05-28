<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('keywords');
            $table->text('description');
            $table->string('name');
            $table->string('alias', 150)->unique();
            $table->text('previewdesc');
            $table->text('text');
            $table->string('img', 255);
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
        Schema::table('ourservices', function (Blueprint $table) {
            //
        });
    }
}
