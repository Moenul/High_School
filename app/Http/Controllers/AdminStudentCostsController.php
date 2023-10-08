<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCost;
use App\Models\Classs;

class AdminStudentCostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCosts = StudentCost::orderBy('class_id', 'asc')->get();
        $classes = Classs::pluck('name','id')->all();
        return view('admin.studentCosts.index', compact('studentCosts','classes'));
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

        StudentCost::create($input);

        return redirect('admin/studentCosts')->with('success', 'StudentCost Item Created!');
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
        $studentCost = StudentCost::findOrFail($id);
        $classes = Classs::pluck('name','id')->all();
        return view('admin.studentCosts.edit', compact('studentCost','classes'));
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
        $studentCost = StudentCost::findOrFail($id);

        $input = $request->all();

        $studentCost->update($input);

        return redirect('/admin/studentCosts')->with('success', 'StudentCost Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentCost = StudentCost::findOrFail($id);

        $studentCost->delete();
        return redirect()->back()->with('warning', 'StudentCost Item Deleted!');
    }
}
