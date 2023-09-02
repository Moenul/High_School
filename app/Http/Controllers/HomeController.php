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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contact = Contact::first();
        $about = About::first();
        $galleries = Gallery::all();
        $events = Event::orderBy('date', 'desc')->limit(3)->get();
        $members = Member::all();
        $instructors = Instructor::all();
        return view('home', compact('contact','about','galleries','events','members','instructors'));
    }
}
