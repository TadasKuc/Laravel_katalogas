<?php


namespace App\Repositories;


use App\Models\Car;
use Illuminate\Database\Eloquent\Model;

class CarRepository
{

    public function store($request)
    {
        $car = new Car();
        $car->manufacturer     = $request->get('manufacturer');
        $car->model            = $request->get('model');
        $car->year_manufacture = $request->get('year_manufacture');
        $car->engine_cc        = $request->get('engine_cc');
        $car->power_kw         = $request->get('power_kw');
        $car->color            = $request->get('color');
        $car->fuel_type        = $request->get('fuel_type');
        $car->gearbox          = $request->get('gearbox');

        $car->save();
    }

    public function update($request, $car)
    {
        $car->update($request->toArray());
    }

    public function destroy($car)
    {
        $car->delete();
    }

}
