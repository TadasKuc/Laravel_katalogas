<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
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

        if (request('category')){

            $categoriesIds = Category::query()->select('id')->where('category_id', '=',request('category'))->get();

            $parts = Part::query()->whereIn('category_id', $categoriesIds->toArray())->paginate(16);
        } else {
            $parts      = Part::latest()->paginate(12);
        }

        $categories = Category::query()->where('category_id', '=',0 )->get();

        return view('home',[
            'parts'      => $parts,
            'categories' => $categories
        ]);
    }

}
