<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speach;
use App\Models\Photo;
use Image;

class AdminSpeachsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaches = Speach::all();
        return view('admin.speaches.index', compact('speaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speaches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $imageConvert = Image::make($file)->encode('webp', 90);

            $name = time() . $file->getClientOriginalName();
            $filename = pathinfo($name, PATHINFO_FILENAME);
            $destinationPath = public_path('images/' . $filename . '.webp');

            $imageConvert->save($destinationPath);

            $name = $filename . ".webp";

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        Speach::create($input);

        return redirect('admin/speaches')->with('success', 'Speach Item Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speach = Speach::findOrFail($id);
        return view('admin.speaches.edit', compact('speach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $speach = Speach::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')){

            if ($speach->photo_id !== null) {
                unlink(public_path() . $speach->photo->file);

                $photo = $speach->photo->id;
                Photo::findOrFail($photo)->delete();
            }

            $imageConvert = Image::make($file)->encode('webp', 90);

            $name = time() . $file->getClientOriginalName();
            $filename = pathinfo($name, PATHINFO_FILENAME);
            $destinationPath = public_path('images/' . $filename . '.webp');

            $imageConvert->save($destinationPath);

            $name = $filename . ".webp";

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $speach->update($input);

        return redirect('/admin/speaches')->with('success', 'Speach Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speach = Speach::findOrFail($id);

        if ($speach->photo_id !== null) {
            unlink(public_path() . $speach->photo->file);

            $photo = $speach->photo->id;
            Photo::findOrFail($photo)->delete();
        }

        $speach->delete();
        return redirect()->back()->with('warning', 'Speach Item Deleted!');
    }
}
