<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list events
        if (\request()->is("api/*")){
            return $this->success(Event::all(), 'Events retrieved successfully');
        }

        return view('pages.events.list', [
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.events.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'event_name' => 'required',
            'event_description' => 'required',
            'event_start_time' => 'required|date',
            'event_end_time' => 'required|date|after:event_start_time',
            'event_location' => 'required',
        ]);

        // create event
        $event = Event::create($request->all());

        // confirm event creation
        if ($request->is("api/*")){
            if ($event) {
                return $this->success($event, 'Event created successfully',201);
            } else {
                return $this->error('Event creation failed');
            }
        }

        return view("pages.events.list", [
            'events' => Event::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // show event details
        return $this->success($event, 'Event retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // validate request
        $request->validate([
            'event_name' => 'required',
            'event_description' => 'required',
            'event_start_time' => 'required|date_format:Y-m-d H:i:s',
            'event_end_time' => 'required|date_format:Y-m-d H:i:s|after:event_start_time',
            'event_location' => 'required',
        ]);

        // update event
        $event->update($request->all());

        return $this->success($event, 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // delete event
        $event->delete();

        //check if trashed
        if ($event->trashed()) {
            return $this->success($event, 'Event deleted successfully');
        } else {
            return $this->error('Event deletion failed',500);
        }
    }
}
