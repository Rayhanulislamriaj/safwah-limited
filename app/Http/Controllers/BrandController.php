<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $insertRecord = new Brand;
        $insertRecord->name = trim($request->name);

        if (!empty($request->file('photo'))) {
            $file = $request->file('photo');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/brand/', $filename);
            $insertRecord->photo = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', 'Brand successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $data['getrecord'] = Brand::find($id);
        return view('backend.brand.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Brand $brand)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request, Brand $brand)
    {
        return $brand;
        die();

        $deleteRecord = Brand::find($id);

        if (!empty($deleteRecord->photo) && file_exists('public/brand/' . $deleteRecord->photo)) {
            unlink('public/brand/' . $deleteRecord->photo);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Brand successfully Deleted!');
    }
}