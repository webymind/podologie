<?php

namespace App\Http\Services;
use App\Models\Event;
use Carbon\Carbon;

class EventService
{
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
        //$this->google_service = new GoogleService($user);
    }
    public function create($data)
    {
        // if(isset($data['all-all-checkbox'])&& $data['all-day-checkbox']==1){
        //     $data_diff = Carbon::createFromTimestamp(strtotime($data['end']))->diffInDays(Carbon::createFromTimestamp(strtotime($data['start'])));
        //     $data['end'] = Carbon::createFromTimestamp(strtotime($data['start'])->addDays($data_diff)->toDateString());
        // }
        $event = new Event($data);
        $event->save();
       // SyncEventWithGoogle::dispatch($event, $this->user);
        return $event;
    }
    public function allEvents($filters)
    {
        $eventQuery = Event::query();
        $eventQuery->where( 'user_id'. $this->user_id);
        if ($filters['start']){
            $eventQuery->where('start', '>=', $filters['start']);
        }
        if ($filters['end']) {
            $eventQuery->where('end', '<=', $filters['end']);
        }
        $events = $eventQuery->get();
        $data = [];
        foreach ($events as $event) {
            if (!(int)$event['alldayCheckbox']) {
                $event['alldayCheckbox'] = false; 
                $event['start'] = Carbon::CreateFormTimeStamp(strtotime($event['start']))->toDateTimeString();
                $event['end'] = Carbon::CreateFromTimeStamp(strtotime($event['end']))->toDateTimeString();
                $event['endDay'] = $event['end'];
                $event['startDay'] = $event['start'];
            }else{
                $event['alldayCheckbox'] = true;
                $event['endDay'] = Carbon::CreateFromTimeStamp(strtotime($event['end']))->addDays(-1)-toDateString();
                $event['startDay'] = $event['start'];

            }
            $event['eventid'] = $event['id'];
            array_push($data, $event);
        }
        return $data;
    }
}