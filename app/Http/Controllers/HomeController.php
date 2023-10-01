<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Concern;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Service;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = Home::all();
        $homes = Home::all();
        return view('index', $data, compact('homes'));
    }
    public function about()
    {

        $aboutdata['getrecord'] = About::all();
        $about = About::all();
        return view('about', $aboutdata, compact('about'));
    }
    public function service()
    {
        $goals = Service::all();
        return view('service', compact('goals'));
    }
    public function concern()
    {
        $concerns = Concern::all();
        return view('concern', compact('concerns'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function contact_post(Request $request)
    {
        // Message send in database
        $insertRecord = new Contact;
        $insertRecord->name = trim($request->name);
        $insertRecord->email = trim($request->email);
        $insertRecord->subject = trim($request->subject);
        $insertRecord->message = trim($request->message);
        $insertRecord->save();

        Mail::to('riaj251716@gmail.com')->send(new ContactMail($request));

        return back()->with('success', 'Your Message send Successfully!');
    }

}