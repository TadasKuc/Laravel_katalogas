<?php

use App\Models\Car;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->text('manufacturer');
            $table->text('model');
            $table->date('year_manufacture');
            $table->integer('engine_cc');
            $table->integer('power_kw');
            $table->text('color');
            $table->enum('fuel_type',Car::FUEL_TYPE);
            $table->enum('gearbox', CAR::GEARBOX);

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
        Schema::dropIfExists('table_cars');
    }
}
