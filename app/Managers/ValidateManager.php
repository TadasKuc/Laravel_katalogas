<?php


namespace App\Managers;


class ValidateManager
{

    public function validateCarRequest(): array
    {

        return request()->validate([
            'manufacturer'     => ['required', 'min:3', 'max:30'],
            'model'            => ['required', 'min:1', 'max:30'],
            'year_manufacture' => ['required', 'date'],
            'power_kw'         => ['required', 'numeric',  'min:20', 'max:1000'],
            'color'            => ['min:3', 'max:30'],
            'fuel_type'        => ['required', 'min:3', 'max:30'],
            'gearbox'          => ['required', 'min:3', 'max:30'],
        ]);
    }

    public function validatePartRequest()
    {
        return request()->validate([
            'title' => ['required', 'min:5', 'max:255']
        ]);

    }

}
