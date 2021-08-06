<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carsList = Car::all();
        return view('cars.car-index', ['carsList' => $carsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.car-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->manufacturer     = $request->get('manufacturer');
        $car->model            = $request->get('model');
        $car->year_manufacture = $request->get('year_manufacture');
        $car->engine_cc        = 1000 * ($request->get('engine_cc'));
        $car->power_kw         = $request->get('power_kw');
        $car->color            = $request->get('color');
        $car->fuel_type        = $request->get('fuel_type');
        $car->gearbox          = $request->get('gearbox');

        $car->save();

        return redirect(route('cars.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.car-edit', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->toArray());

        return redirect(route('cars.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect(route('cars.index'));
    }
}
