<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
<<<<<<< HEAD
    {
=======
    { 
>>>>>>> ec86efd271de12d4f0b7281be0dc317ab54540cf
        Schema::create('bands', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userId');
          $table->string('bandName', 50);
          $table->string('genre');
          $table->text('bandDescription', 140)->nullable();
          $table->string('fileUpload')->nullable();
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
        Schema::dropIfExists('bands');
    }
}
