<?php


namespace App\Repositories;


use App\Models\Image;
use App\Models\Part;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PartRepository
{

    public function store($request)
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

    public function update($request, $part)
    {
        $part->car_id        = $request->get('car_id');
        $part->category_id   = $request->get('category_id');
        $part->title         = $request->get('title');
        $part->description   = $request->get('description');
        $part->price         = $request->get('price');
        $part->save();

    }

    public function savePhoto($request) {

        if($request->hasFile('image')) {

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

    public function destroy($part)
    {
        $part->delete();
    }
}
