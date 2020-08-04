<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apprenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('apprenants',function(Blueprint $table){
            $table->string('email')->increments();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date');
            $table->string('ville');
            $table->string('formation');
            $table->string('etablissement');
            $table->string('contact');
            $table->string('photo')->nullable() ;
            $table->integer('tuteurs_id')->unsigned();
            $table->foreign('tuteurs_id')->references('id')->on('tuteurs')->onDelete('cascade');
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
        //
        Schema::dropIfExists('apprenants');
    }
}
