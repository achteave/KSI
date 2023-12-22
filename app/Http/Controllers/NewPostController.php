<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// File::link(
//     storage_path('app/public'), public_path('storage')
//     );

class NewPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $event)
    {
        $events = Post::all();
        return view('admin.event.index', compact('events'));
    }

    public function home(Post $event)
    {
        $events = Post::latest()->take(3)->get();
        return view('dashboard.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.event.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'image' => 'image|file|mimes:jpg'
        ]);
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-image');
        }
    
        Post::create($validatedData);
    
        return redirect('/admin/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $events)
    {
        $events = Post::all();
        return view('admin.event.index', compact('events'));
    }
    
    /**
     * Display the specified resource in the user/visitor page.
     */
    public function showevent(Post $events)
    {
        $events = Post::latest()->get();
        return view('dashboard.event', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Post::find($id);
        return view('admin.event.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $event)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'image' => 'image|file'
        ];

        
        $validatedData = $request->validate($rules);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-image');
        }

        Post::where('id', $event->id)->update($validatedData);

        return redirect('/admin/events');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Post::find($id);
        $event->delete();
        return redirect('/admin/events');
    }

}
