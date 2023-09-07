<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classs;
use App\Models\Section;
use App\Models\Student;
use App\Models\Photo;

class AdminStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->get();
        return view('admin.students.index', compact('students'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.show', compact('student'));
    }

    public function view($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.views', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $classes = Classs::pluck('name','id')->all();
        $sections = Section::pluck('name','id')->all();
        return view('admin.students.edit', compact('student', 'classes','sections'));
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
        $student = Student::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        if($file = $request->file('certificate_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $certificate = Photo::create(['file'=>$name]);

            $input['certificate_id'] = $certificate->id;
        }

        $student->update($input);

        return redirect('/admin/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        if ($student->photo_id !== null) {
            unlink(public_path() . $student->photo->file);

            $photo = $student->photo->id;
            Photo::findOrFail($photo)->delete();
        }

        if ($student->certificate_id !== null) {
            unlink(public_path() . $student->certificate->file);

            $certificate = $student->certificate->id;
            Photo::findOrFail($certificate)->delete();
        }

        $student->delete();
        return redirect('/admin/students');
    }
}
