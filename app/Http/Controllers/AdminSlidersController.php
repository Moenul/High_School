<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Photo;
use Image;

class AdminSlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        Slider::create($input);

        return redirect('admin/sliders')->with('success', 'Slider Item Created!');
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
        //
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
        Slider::findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Slider Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->photo_id !== null) {
            unlink(public_path() . $slider->photo->file);

            $photo = $slider->photo->id;
            Photo::findOrFail($photo)->delete();
        }

        $slider->delete();
        return redirect()->back()->with('warning', 'Slider Item Deleted!');
    }
}
