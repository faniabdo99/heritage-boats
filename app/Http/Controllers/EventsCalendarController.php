<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsCalendarController extends Controller{
    public function getCalendar(){
        return view('static.calendar');
    }
}
