<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function admin_team(Request $request)
    {
        $teams = Team::all();
        return view('backend.team.list', compact('teams'));
    }
    public function admin_team_post(Request $request)
    {
        // return view('backend.team.list');

        $insertRecord = new Team;
        $insertRecord->name = trim($request->name);
        $insertRecord->designation = trim($request->designation);
        $insertRecord->description = trim($request->description);

        if (!empty($request->file('photo'))) {
            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/team/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Brand successfully Added!');
    }

    public function admin_team_edit($id, Request $request)
    {
        $data['getrecord'] = Team::find($id);
        return view('backend.team.edit', $data);
    }
    public function admin_team_update($id, Request $request)
    {
        $updateRecord = Team::find($id);
        $updateRecord->name = trim($request->name);
        $updateRecord->designation = trim($request->designation);
        $updateRecord->description = trim($request->description);

        if (!empty($request->file('photo'))) {

            if (!empty($updateRecord->photo) && file_exists('public/team/' . $updateRecord->photo)) {
                unlink('public/team/' . $updateRecord->photo);
            }

            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/team/', $filename);
            $updateRecord->photo = $filename;
        }
        $updateRecord->save();

        return back()->with('success', 'Brand successfully Updated!');
    }
    public function admin_team_delete($id, Request $request)
    {
        $deleteRecord = Team::find($id);

        if (!empty($deleteRecord->photo) && file_exists('public/team/' . $deleteRecord->photo)) {
            unlink('public/team/' . $deleteRecord->photo);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Brand successfully Deleted!');
    }
}