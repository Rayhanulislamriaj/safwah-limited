<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function admin_footer(Request $request)
    {
        $data['getrecord'] = Footer::all();
        return view('backend.footer.list', $data);
    }
    public function admin_footer_post(Request $request)
    {
        if ($request->add_and_update == "Add") {
            $insertRecord = new Footer;
        } else {
            $insertRecord = Footer::find($request->id);
        }

        $insertRecord->name = trim($request->name);
        $insertRecord->description = trim($request->description);
        $insertRecord->location = trim($request->location);
        $insertRecord->email = trim($request->email);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->desginer = trim($request->desginer);
        $insertRecord->facebook = trim($request->facebook);
        $insertRecord->facebook_link = trim($request->facebook_link);
        $insertRecord->website = trim($request->website);
        $insertRecord->website_link = trim($request->website_link);
        $insertRecord->youtube = trim($request->youtube);
        $insertRecord->youtube_link = trim($request->youtube_link);
        $insertRecord->instagram = trim($request->instagram);
        $insertRecord->instagram_link = trim($request->instagram_link);
        $insertRecord->save();

        return redirect()->back()->with('success', 'Footer Page successfully save!');
    }
}