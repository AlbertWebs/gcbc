<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Log;

class FullCalendarController extends Controller
{
    public function getEvent(){
        $title="Our Events| Grace Community Bible Church";
        if(request()->ajax()){
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
        $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                ->get(['id','title','start', 'end']);
        return response()->json($events);
        }
        return view('front.fullcalendar');

    }

    public function createEvent(Request $request){
        $data = array_except($request->all(), ['_token']);
        $events = Event::insert($data);
        return response()->json($events);
    }

    public function deleteEvent(Request $request){
        $event = Event::find($request->id);
        return $event->delete();
    }
}
