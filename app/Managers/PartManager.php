<?php


namespace App\Managers;


use App\Repositories\PartRepository;

class PartManager
{

    /**
     * PartManager constructor.
     */
    public function __construct(private PartRepository $repository,
                                private ValidateManager $validator)
    {
    }

    public function store($request)
    {
        $this->validator->validatePartRequest();

        $this->repository->store($request);
    }

    public function update($request, $part)
    {
        $this->validator->validatePartRequest($request);

        $this->repository->update($request, $part);

    }

    public function destroy($part)
    {
        $this->repository->desttroy($part);
    }
}
