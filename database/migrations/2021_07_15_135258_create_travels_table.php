<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('src', 255);
            $table->string('tipo', 50);
            $table->string('destinazione', 50);
            $table->string('struttura', 80);
            $table->string('n_notti', 10);
            $table->string('localita', 50);
            $table->float('prezzo', 5, 2);
            $table->boolean('disponibilita')->default(1);
            $table->text('descrizione')->nullable();
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
        Schema::dropIfExists('travels');
    }
}
