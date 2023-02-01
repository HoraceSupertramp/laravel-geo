<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->string('code');
            $table->string('name');
            $table->string('continent');
            $table->string('region');
            $table->unsignedBigInteger('surface_area');
            $table->unsignedBigInteger('population');
            $table->unsignedTinyInteger('life_expectancy')->nullable();
            $table->string('local_name');
            $table->string('government_form');
            $table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
