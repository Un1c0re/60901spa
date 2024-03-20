<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events', ['events'=>Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event_create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'owner_id' => 'required|integer',
            'name' => 'required|unique:events|max:255',
            'place' => 'required|max:255',
            'description' => 'required|max:255',
            'started_at' => 'required|date',
            'category_id' => 'integer'
        ]);
        $event = new Event($validated);
        $event->save();
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('event_edit', [
            'event' =>Event::all()->where('id', $id)->first(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'place' => 'required|max:255',
            'description' => 'required|max:255',
            'started_at' => 'required|date',
//            'started_at' => 'required|date_format:Y-m-d',
            'category_id'=> 'integer'
        ]);
        $event = Event::all()->where('id', $id)->first();
        $event->name = $validated['name'];
        $event->place = $validated['place'];
        $event->description = $validated['description'];
        $event->started_at = $validated['started_at'];
        $event->save();
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);
        return redirect('/events');
    }
}
