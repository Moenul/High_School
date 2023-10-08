<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;
use App\Models\Photo;
use Image;
use Illuminate\Support\Str;

class AdminPolicysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policys = Policy::all();
        return view('admin.policys.index', compact('policys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.policys.create');
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

        $input['slug'] = Str::slug($request->name);

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

        Policy::create($input);

        return redirect('admin/policys')->with('success', 'Policy Item Created!');
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
        $policy = Policy::findOrFail($id);
        return view('admin.policys.edit', compact('policy'));
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
        $policy = Policy::findOrFail($id);

        $input = $request->all();

        $input['slug'] = Str::slug($request->name);

        if($file = $request->file('photo_id')){

            if ($policy->photo_id !== null) {
                unlink(public_path() . $policy->photo->file);

                $photo = $policy->photo->id;
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

        $policy->update($input);

        return redirect('/admin/policys')->with('success', 'Policy Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $policy = Policy::findOrFail($id);

        if ($policy->photo_id !== null) {
            unlink(public_path() . $policy->photo->file);

            $photo = $policy->photo->id;
            Photo::findOrFail($photo)->delete();
        }

        $policy->delete();
        return redirect()->back()->with('warning', 'Policy Item Deleted!');
    }
}
