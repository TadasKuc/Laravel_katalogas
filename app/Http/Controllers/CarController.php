<?php

namespace App\Http\Controllers;

use App\Managers\CarManager;
use App\Models\Car;
use App\Models\Part;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * CarController constructor.
     */
    public function __construct(private CarManager $carManager)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cars.car-index', ['carsList' => Car::all()]);
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
        $this->carManager->store($request);

        return redirect(route('cars.index'));

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
        $this->carManager->update($request, $car);

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
        $this->carManager->destroy($car);

        return redirect(route('cars.index'));

    }


}
