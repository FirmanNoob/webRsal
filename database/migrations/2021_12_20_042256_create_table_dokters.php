<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDokters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dokters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gambar');
            $table->unsignedBigInteger('speciality_id');
            $table->foreign('speciality_id')->references('id')->on('table_specialitys');
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
        Schema::dropIfExists('table_dokters');
    }
}
