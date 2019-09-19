<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewavirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewavirtuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaPemilik');
            $table->string('email');
            $table->string('phone');
            $table->string('phone_wa')->nullable();
            $table->enum('statusPemilik', ['owner', 'agent'])->nullable();
            $table->string('namaVirtual');
            $table->enum('jmlKamar', ['studio', '1br', '2br', '3br+'])->nullable();
            $table->enum('kamarMandi', ['1', '2', '3'])->nullable();
            $table->enum('kondisi', ['non', 'semi', 'full'])->nullable();
            $table->string('jmlUnit')->nullable();
            $table->string('jmlRuangan')->nullable();
            $table->string('jmlLantai')->nullable();
            $table->string('jmlTower')->nullable();
            $table->string('luas')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('kecamatan',['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49'])->nullable();
            $table->enum('kota', ['Jakarta Pusat', 'Jakarta Barat', 'Jakarta Timur', 'Jakarta Selatan', 'Jakarta Utara', 'Tanggerang', 'Bekasi'])->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('fasilitas');
            $table->string('annually')->nullable();
            $table->string('semi_annually')->nullable();
            $table->string('sell')->nullable();
            $table->string('foto');
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('sewavirtuals');
    }
}
