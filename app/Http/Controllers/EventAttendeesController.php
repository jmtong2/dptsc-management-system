<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Event;
use App\Models\EventAttendees;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class EventAttendeesController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list event attendees
        if (\request()->is("api/*")){
            return $this->success(EventAttendees::all(), 'Event Attendees List');
        }

        return view("pages.event-attendees.list", [
            "eventAttendees" => EventAttendees::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.event-attendees.create", [
            "events" => Event::all(),
            "drivers" => Driver::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'driver_id' => 'required|exists:drivers,id',
            'driver_reliever_id' => 'required|exists:drivers,id|different:driver_id',
        ]);

        // create event attendee
        $eventAttendee = EventAttendees::create($request->all());

        // check if event attendee was created
        if ($request->is("api/*")){
            if ($eventAttendee) {
                return $this->success($eventAttendee, 'Event Attendee Created', 201);
            }else{
                return $this->error('Event Attendee Not Created');
            }
        }

        return view("pages.event-attendees.list", [
            "eventAttendees" => EventAttendees::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventAttendees $eventAttendee)
    {
        // show event attendee details
        return $this->success($eventAttendee, 'Event Attendee Details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventAttendees $eventAttendees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventAttendees $eventAttendee)
    {
        // validate request
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'driver_id' => 'required|exists:drivers,id',
            'driver_reliever_id' => 'required|exists:drivers,id|different:driver_id',
        ]);

        // update event attendee
        $eventAttendee->update($request->all());

        return $this->success($eventAttendee, 'Event Attendee Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventAttendees $eventAttendee)
    {
        // delete event attendee
        $eventAttendee->delete();

        //check if was trashed
        if ($eventAttendee->trashed()) {
            return $this->success($eventAttendee, 'Event Attendee Deleted');
        }else{
            return $this->error('Event Attendee Not Deleted',500);
        }
    }
}
