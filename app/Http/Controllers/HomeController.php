<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\About;
use App\Models\Photo;
use App\Models\Gallery;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\Instructor;
use App\Models\Notice;
use App\Models\Slider;
use App\Models\Policy;
use App\Models\Speach;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $contact = Contact::first();
        $about = About::with('photo')->first();
        $galleries = Gallery::with('photo')->get();
        $events = Event::orderBy('date', 'desc')->limit(3)->get();
        $members = Member::with('photo')->get();
        $instructors = Instructor::with('photo')->get();
        $policys = Policy::all();
        $speaches = Speach::with('photo')->get();


        $notices = Notice::with('pdf')->simplePaginate(5);

        if ($request->ajax()) {
            $view = view('includes.notice', compact('notices'))->render();

            return response()->json(['html' => $view]);
        }

        $sliders = Slider::where('status',1)->with('photo')->take(5)->get();

        return view('home', compact('contact','about','galleries','events','members','instructors','notices','sliders','policys','speaches'));
    }
}
