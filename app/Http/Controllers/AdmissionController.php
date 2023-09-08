<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\About;
use App\Models\Policy;
use Carbon\Carbon;
use App\Models\Photo;
use App\Models\Admission;
use App\Models\Classs;
use App\Models\StudentCost;


class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        $about = About::first();
        $policys = Policy::all();
        $classes = Classs::pluck('name','id')->all();
        $studentCosts = StudentCost::orderBy('class_id', 'asc')->get();


        return view('admissions.index', compact('contact','about','classes','studentCosts','policys'));
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

        $this->validate($request, [
            'student_birth_reg'=>'required|max:17|unique:admissions,student_birth_reg',
        ]);

        if($file = $request->file('certificate_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $certificate = Photo::create(['file'=>$name]);

            $input['certificate_id'] = $certificate->id;
        }

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $admission = Admission::create($input);

        return redirect()->route('admission.show', $admission);
        // return dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admission = Admission::findOrFail($id);
        return view('admissions.success.index', compact('admission'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
