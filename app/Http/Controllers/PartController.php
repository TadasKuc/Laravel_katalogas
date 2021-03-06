<?php

namespace App\Http\Controllers;

use App\Managers\PartManager;
use App\Models\Car;
use App\Models\Category;
use App\Models\Image;
use App\Models\Part;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartController extends Controller
{
    /**
     * PartController constructor.
     */
    public function __construct(private PartManager $partManager)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request('category')){

            $categoriesIds = Category::query()->select('id')->where('category_id', '=',request('category'))->get();

            $parts = Part::query()->whereIn('category_id', $categoriesIds->toArray())->paginate(16);
        } else {

            if(Auth()->user()->isSuperAdmin()) {
                $parts = Part::all();
            } else {
                $parts = Part::query()->where('user_id', '=', Auth::user()->id)->get();
            }
        }

       return view('part.part-index' , ['parts' => $parts]);
    }


    public function create()
    {
        return view('part.part-create', [
            'cars'       => CAR::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->partManager->store($request);

        return redirect(route('parts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {

        return view('part.part-show', [
            'part' => $part,
            'partsByCar' => $this->partByCar($part->car_id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {

        return view('part.part-edit', [
            'part' =>$part,
            'cars' => Car::all(),
            'categories' => Category::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        $this->partManager->update($request, $part);

        return redirect(route('parts.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {

        $this->partManager->destroy($part);

        return redirect(route('parts.index'));
    }


    public function partByCar($carId)
    {
        return Part::query()
            ->where('car_id', $carId)
            ->get();

    }

    public function exportToCsv()
    {

        $name = 'parts.csv';
        $headers = ['Content-Disposition' => 'attachment; filename='. $name,];
        $columns = \Illuminate\Support\Facades\Schema::getColumnListing("parts");
        array_shift($columns);
        $data = Part::all();

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $value) {
                $data = $value->toArray();

                unset($data['id']);

                fputcsv($file, $data);
            }

            fclose($file);

        };

        return response()->stream($callback, 200,  $headers );

    }

}
