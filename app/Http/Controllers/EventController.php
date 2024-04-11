<?php

namespace App\Http\Controllers;

//use Spatie\GoogleCalendar\Event;
use App\Models\User;
 use App\Models\Event;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequest;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $startTime = Carbon::parse($request->input('startDate').''.$request->input('startDate'), 'indian/Mauritius');
    //     $endTime = (clone $startTime)->addHour();
    //     Event::create([
    //         'startDate' => $request->input('startDate'),
    //         'endDate' => $request->input('endDate'),
    //         'title'  => $request->input('title'),
    //         'user_name'  => $request->input('user_name'),
    //         'service_name'  => $request->input('service_name'),
    //         'description'  => $request->input('description'),
    //     ]);

    //     return redirect()->back()->witMessage('Appointment Booked');


    // }



        public function store(CreateEventRequest $request)
    {
            //     // Validate the incoming request data
        $validatedData = $request->validate([
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'title' => 'required|string|max:255',
            'user_name' => 'required|string|max:255', // Adjust based on your database schema
            'service_name' => 'required|string|max:255', // Adjust based on your database schema
            'description' => 'nullable|string',
            'alldayCheckbox' => 'boolean',
        ]);

    //     // Create a new Event instance and populate it with the validated data
        $event = new Event();
        $event->start = $validatedData['start'];
        $event->end = $validatedData['end'];
        $event->title = $validatedData['title'];
        $event->user_name = $validatedData['user_name'];
        $event->service_name = $validatedData['service_name'];
        $event->description = $validatedData['description'];
        $event->alldayCheckbox = $validatedData['alldayCheckbox'];
        $event->event_id = $event->id;

    // // Save the event
        $event->save();

    //     // Return a JSON response indicating success
        return response()->json([
            'success' => true,
            'message' => 'Event saved successfully',
            'data' => [
                'event_id' => $event->id, // Return the ID of the saved event if needed
            ],
        ]);

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // public function getEvents() {
    //     $events = Event::select('title', 'user_name', 'service_name', 'start', 'end')->get();
    //     return response()->json($events);
    // }




    // public function fetchGoogleCalendarEvents()
    // {
    //     // Fetch events from Google Calendar
    //     $googleEvents = GoogleCalendarEvent::get();

    //     // Format fetched Google Calendar events for FullCalendar
    //     $formattedGoogleEvents = $this->formatGoogleEvents($googleEvents);

    //     return $formattedGoogleEvents;
    // }

    // // Method to format Google Calendar events for FullCalendar
    // private function formatGoogleEvents($events)
    // {
    //     $formattedEvents = [];

    //     foreach ($events as $event) {
    //         // Format each event according to FullCalendar's structure
    //         $formattedEvent = [
    //             'id' => $event->id,
    //             'title' => $event->name,
    //             'start' => $event->startDateTime, // Adjust the start date property
    //             'end' => $event->endDateTime,
    //             'description'=> $event->description, // Adjust the end date property
    //             // Add other properties as needed (description, location, etc.)
    //         ];

    //         $formattedEvents[] = $formattedEvent;
    //     }

    //     return $formattedEvents;
    // }



}






    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'start' => 'required|date',
    //         'end' => 'required|date|after:start',
    //         'title' => 'required|string|max:255',
    //         'user_name' => 'required|string|max:255', // Adjust based on your database schema
    //         'service_name' => 'required|string|max:255', // Adjust based on your database schema
    //         'description' => 'nullable|string',
    //         'alldayCheckbox' => 'boolean',
    //     ]);

    //     // Create a new Event instance and populate it with the validated data
    //     $event = new Event();
    //     $event->start = $validatedData['start'];
    //     $event->end = $validatedData['end'];
    //     $event->title = $validatedData['title'];
    //     $event->user_name = $validatedData['user_name'];
    //     $event->service_name = $validatedData['service_name'];
    //     $event->description = $validatedData['description'];
    //     $event->alldayCheckbox = $validatedData['alldayCheckbox'];
    //     $event->event_id = $event->id;

    // // Save the event
    //     $event->save();

    //     // Return a JSON response indicating success
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Event saved successfully',
    //         'data' => [
    //             'event_id' => $event->id, // Return the ID of the saved event if needed
    //         ],
    //     ]);





