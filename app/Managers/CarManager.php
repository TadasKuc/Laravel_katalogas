<?php


namespace App\Managers;


use App\Models\Part;
use App\Repositories\CarRepository;

class CarManager
{

    /**
     * CarManager constructor.
     */
    public function __construct(private CarRepository $repository,
                                private ValidateManager $validator)
    {
    }

    public function store($request)
    {

        $this->validator->validateCarRequest($request);

        $this->repository->store($request);

    }

    public function update($request, $car)
    {

        $this->validator->validateCarRequest($request);

        $this->repository->update($request, $car);

    }

    public function destroy($car)
    {

        if ($this->carHasNoPart($car->id)) {
            $this->repository->destroy($car);
        }

    }

    public function carHasNoPart($carID)
    {
        return Part::query()->where('car_id', $carID)
            ->get()->isEmpty();

    }

}
