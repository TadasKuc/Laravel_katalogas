<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Part;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $parts = Part::all();

        return view('home',[
            'parts' => $parts
        ]);
    }
}
