<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBrg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('masterBrg', function (Blueprint $table) {
        $table->increments('id');
        $table->string('idKategori');
        $table->string('namaBarang');
        $table->string('jenis');
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
        Schema::dropIfExists('masterBrg');
    }
}
