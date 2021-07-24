<?php

namespace App\Http\Controllers;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();

       return view('part.part-index' , ['parts' => $parts]);
    }


    public function create()
    {
        return view('part.part-create', [
            'cars' => CAR::all(),
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

        $part = new Part();
        $part->user_id       = Auth::user()->id;
        $part->car_id        = $request->get('car_id');
        $part->category_id   = $request->get('category_id');
        $part->title         = $request->get('title');
        $part->description   = $request->get('description');
        $part->price         = $request->get('price');
        $part->save();

        $image = new Image();
        $image->part_id = $part->id;
        $image->path = $this->savePhoto($request);
        $image->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        return view('part.part-show', ['part' => $part]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
//        return view('part.part-edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        $part->delete();

        return redirect(route('parts.index'));
    }

    public function savePhoto($request) {


        if($request->hasFile('image')) {

            // get file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $request->file('image')->storeAs('image', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        return $fileNameToStore;
    }

}
