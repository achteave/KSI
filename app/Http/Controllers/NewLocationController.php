<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class NewLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Location $locs)
    {
        $locs = Location::all();
        return view('admin.location.index', compact('locs'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'branch_name' => 'required',
            'address' => 'required',
            'gmaps' => 'required',
            'image' => 'image|file'
        ]);
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('location-image');
        }
    
        Location::create($validatedData);
    
        return redirect('/admin/locations');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $locs)
    {
        $locs = Location::all();
        return view('admin.location.index', compact('locs'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $loc = Location::find($id);
        return view('admin.location.edit', compact('loc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $loc)
    {
        $rules = [
            'branch_name' => 'required',
            'address' => 'required',
            'gmaps' => 'required',
            'image' => 'image|file'
        ];
    
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('location-image');
        }
        $validatedData = $request->validate($rules);

    
        Location::where('id', $loc->id)->update($validatedData);
    
        return redirect('/admin/locations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loc = Location::find($id);
        $loc->delete();
        return redirect('/admin/locations');
        
    }
}
