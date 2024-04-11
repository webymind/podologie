<?php

namespace App\Http\Controllers;
use Spatie\GoogleCalendar\Event as GoogleCalendarEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Response;
use App\Models\Event as Events;  // Make sure to import your Event model
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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



    public function store(Request $request)
    {
        try {
            // Retrieve checkbox state
            $allDay = $request->input('alldayCheckbox');

            // Parse start date with 'Indian/Mauritius' timezone
            $startDateTime = Carbon::parse($request->input('startDateTime'));

            if (!$allDay) {
                // Adjust time if it's not an all-day event
                $selectedTime = $request->input('selectedTime'); 
                $startDateTime->setTimeFromTimeString($selectedTime);

                // Parse end date time
                $endDateTime = Carbon::parse($request->input('endDateTime'));
            } else {
                // If it's an all-day event, set the time to start of the day and end of the day
                $startDateTime->startOfDay();
                $endDateTime = $startDateTime->copy()->endOfDay();
            }

            // Convert to UTC
            $startDateTimeUTC = $startDateTime->copy()->setTimezone('UTC');
            $endDateTimeUTC = $endDateTime->copy()->setTimezone('UTC');

            // Get user and service details from the request
            $userSelect = $request->input('user_name');
            $serviceSelect = $request->input('service_name');

            // Get description from the request
            $description = $request->input('description');

            // Concatenate userSelect and serviceSelect into the event title
            $eventTitle = $request->input('title') . ' : ' . $userSelect . ' : ' . $serviceSelect;

            // Create the event using the Spatie Google Calendar package
            $event = new GoogleCalendarEvent();

            // Set event attributes including the calculated endDateTime
            $event->name = $eventTitle;
            $event->startDateTime = $startDateTimeUTC;
            $event->endDateTime = $endDateTimeUTC; // Set the explicitly calculated endDateTime
            $event->description = $description; // Add description to the event
            // Set other event properties like description, location, etc.

            // Save the event to the Google Calendar
            $event->save();

            // Handle success or failure responses here
                    // SweetAlert success message in backend
        return response()->json(['message' => 'Event Created Successfully'], Response::HTTP_CREATED);
            // You may return a success message or handle errors accordingly

        } catch (\Exception $e) {
            // Log or handle the exception
            Log::error($e->getMessage());
            return response()->json(['error' => 'Failed to create event'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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

    // Method to fetch event details by eventId
    // public function getEventDetails($id)
    // {
    //     // Fetch the event details based on the $id from the events_table
    //     $event = Event::find($id);

    //     if (!$event) {
    //         return response()->json(['error' => 'Event not found'], 404);
    //     }

    //     // Customize the response data based on your requirements
    //     $responseData = [
    //         'id' => $event->id,
    //         'title' => $event->title,
    //         'description' => $event->description,
    //         'start' => $event->start_date_time, 
    //         'end' => $event->end_date_time, 
    //         'alldayCheckbox' => $event->all_day,
    //         'user_name' => $event->user_name, // Use => instead of = for array key-value pairs
    //         'service_name' => $event->service_name // Use => instead of = for array key-value pairs
    //     ];

    //     return response()->json($responseData);
    // }






}

















