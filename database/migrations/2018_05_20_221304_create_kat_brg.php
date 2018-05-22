<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatBrg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('masterKatBrg', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kategori');
        $table->string('namaKategori');
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
        Schema::dropIfExists('masterKatBrg');
    }
}
