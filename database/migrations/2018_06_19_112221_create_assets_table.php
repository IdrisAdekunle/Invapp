<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
           $table->increments('id');
           $table->string('identification_no');
            $table->string('sap_no');
            $table->string('asset_user');
            $table->integer('item_id');
            $table->integer('department_id');
            $table->string('model');
            $table->string('serial_number');
            $table->boolean('scrap')->default(0);
            $table->string('qrcode');
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
        Schema::dropIfExists('assets');
    }
}
