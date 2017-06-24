<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsMahasiswa extends Migration
{
   public function up()
   {
       Schema::create('items', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nim');
           $table->string('nama');
           $table->string('judul');
           $table->string('email');
           $table->text('abstraksi');
           $table->timestamps();
       });

   }
   public function down()
   {
       Schema::drop("items");
   }
}