<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaziertekelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haziertekeles', function (Blueprint $table) {
            $table->id();
            $table->string("url")->unique();
            $table->string("szoveges_ertekeles");
            $table->integer("pontszam_ertekeles");
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
        Schema::dropIfExists('haziertekeles');
    }
}