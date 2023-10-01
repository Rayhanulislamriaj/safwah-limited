<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Concern;
use App\Models\Contact;
use App\Models\Home;
use App\Models\About;
use App\Models\Service;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function admin_dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }
    public function admin_home(Request $request)
    {
        $data['getrecord'] = Home::all();
        return view('backend.home.list', $data);
    }
    public function admin_home_post(Request $request)
    {
        // return $request;
        if ($request->add_and_update == "Add") {
            $insertRecord = request()->validate([
                'photo' => 'required|mimes:jpg'
            ]);
            $insertRecord = new Home;
        } else {
            $insertRecord = Home::find($request->id);
        }



        $insertRecord->header_name = trim($request->header_name);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->location = trim($request->location);
        $insertRecord->email = trim($request->email);
        $insertRecord->description_short = trim($request->description_short);
        $insertRecord->description_long = trim($request->description_long);

        if (!empty($request->file('photo'))) {

            if (!empty($insertRecord->photo) && file_exists('public/img/' . $insertRecord->photo)) {
                unlink('public/img/' . $insertRecord->photo);
            }
            $file = $request->file('photo');
            $randomStr = 'home';
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Home Page successfully save!');
    }

    public function admin_about(Request $request)
    {
        $aboutdata['getrecord'] = About::all();
        return view('backend.about.list', $aboutdata);
    }
    public function admin_about_post(Request $request)
    {
        // return view('backend.about.list');
        // return $request;
        if ($request->add_and_update == "Add") {
            $insertRecord = request()->validate([
                'photo' => 'required|mimes:jpg'
            ]);
            $insertRecord = new About;
        } else {
            $insertRecord = About::find($request->id);
        }



        $insertRecord->question = trim($request->question);
        $insertRecord->questions_answare = trim($request->questions_answare);

        if (!empty($request->file('photo'))) {

            if (!empty($insertRecord->photo) && file_exists('public/about/' . $insertRecord->photo)) {
                unlink('public/about/' . $insertRecord->photo);
            }



            // $file = $request->file('photo');
            // $randomStr = Str::random(30);
            // $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            // $file->move('public/about/', $filename);
            // $insertRecord->photo = $filename;

            $file = $request->file('photo');
            $randomStr = 'about';
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/about/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'About Page successfully save!');
    }

    //Goals/service
    public function admin_service(Request $request)
    {
        $goals = Service::all();
        return view('backend.service.list', compact('goals'));
    }
    public function admin_service_post(Request $request)
    {

        $insertRecord = new Service;
        $insertRecord->goal_name = trim($request->goal_name);
        $insertRecord->goal_description = trim($request->goal_description);

        if (!empty($request->file('photo'))) {
            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/service/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Goals successfully created!');
    }
    public function admin_service_edit($id, Request $request)
    {
        $data['getrecord'] = Service::find($id);
        return view('backend.service.edit', $data);
    }

    public function admin_service_update($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = Service::find($id);
        $updateRecord->goal_name = trim($request->goal_name);
        $updateRecord->goal_description = trim($request->goal_description);

        if (!empty($request->file('photo'))) {

            if (!empty($insertRecord->photo) && file_exists('public/service/' . $updateRecord->photo)) {
                unlink('public/service/' . $updateRecord->photo);
            }

            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/service/', $filename);
            $updateRecord->photo = $filename;
        }
        $updateRecord->save();

        return redirect(route('admin.service'))->with('success', 'Goals Updated successfully!');
    }
    public function admin_concern(Request $request)
    {
        $concerns = Concern::all();
        return view('backend.concern.list', compact('concerns'));
    }
    public function admin_concern_post(Request $request)
    {
        $insertRecord = new Concern;
        $insertRecord->concern_name = trim($request->concern_name);
        $insertRecord->concern_description = trim($request->concern_description);
        $insertRecord->concern_link = trim($request->concern_link);

        if (!empty($request->file('photo'))) {
            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/concern/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Concern successfully created!');
    }
    public function admin_concern_edit($id, Request $request)
    {
        $data['getrecord'] = Concern::find($id);
        return view('backend.concern.edit', $data);
    }

    public function admin_concern_update($id, Request $request)
    {
        $updateRecord = Concern::find($id);
        $updateRecord->concern_name = trim($request->concern_name);
        $updateRecord->concern_description = trim($request->concern_description);
        $updateRecord->concern_link = trim($request->concern_link);

        if (!empty($request->file('photo'))) {

            if (!empty($updateRecord->photo) && file_exists('public/concern/' . $updateRecord->photo)) {
                unlink('public/concern/' . $updateRecord->photo);
            }

            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/concern/', $filename);
            $updateRecord->photo = $filename;
        }
        $updateRecord->save();

        return back()->with('success', 'Concern Updated successfully!');
    }

    public function admin_concern_delete($id, Request $request)
    {
        $deleteRecord = Concern::find($id);

        if (!empty($deleteRecord->photo) && file_exists('public/concern/' . $deleteRecord->photo)) {
            unlink('public/concern/' . $deleteRecord->photo);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Concern successfully Deleted!');
    }
    public function admin_contact(Request $request)
    {
        $contacts = Contact::all();
        return view('backend.contact.list', compact('contacts'));
    }


}