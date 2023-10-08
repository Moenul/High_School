<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Pdf;


class AdminNoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.notices.index', compact('notices'));
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

        if($file = $request->file('pdf_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('pdfs', $name);

            $pdf = Pdf::create(['file'=>$name]);

            $input['pdf_id'] = $pdf->id;
        }

        Notice::create($input);

        return redirect('admin/notices')->with('success', 'Notice Item Created!');
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
        $notice = Notice::findOrFail($id);
        return view('admin.notices.edit', compact('notice'));
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
        $notice = Notice::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('pdf_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('pdfs', $name);

            $pdf = Pdf::create(['file'=>$name]);

            $input['pdf_id'] = $pdf->id;
        }

        $notice->update($input);

        return redirect('/admin/notices')->with('success', 'Notice Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);

        if ($notice->pdf_id !== null) {
            unlink(public_path() . $notice->pdf->file);

            $pdf = $notice->pdf->id;
            Pdf::findOrFail($pdf)->delete();
        }

        $notice->delete();
        return redirect()->back()->with('warning', 'Notice Item Deleted!');
    }
}
