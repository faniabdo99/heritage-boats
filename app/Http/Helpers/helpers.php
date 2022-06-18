<?php

use App\Models\Club;
use App\Models\Counter;
use App\Models\EventLog;
/*
    Function: FireEventLog();
    Description: Adds a new record to events log table
    Initiated through composer.json autoloader
    Usage(s): UserController.php
*/
function FireEventLog($Model, $Action, $ResourceId, $UserId = null): bool {
    if(!$UserId){$UserId = auth()->user()->id;}
    $NewLog = EventLog::create([
        'model' => $Model,
        'action' => $Action,
        'user_id' => $UserId,
        'resource_id' => $ResourceId
    ]);
    if($NewLog){return true;}else{return false;}
}
/*
    Function: getFeaturedClubs();
    Description: Get a Laravel collection of all the featured clubs in the system
    Initiated through composer.json autoloader
    Usage(s): Navbar, Homepage, ContactUs
*/
function getFeaturedClubs($skip = null){
    if($skip){
        $TotalClubs = Club::count();
        if($skip > $TotalClubs){
            $take = 4;
        }else{
            $take = $TotalClubs - $skip;
        }
        return Club::latest()->where('is_featured' , 1)->skip($skip)->take($take)->get();
    }else{
        return Club::latest()->where('is_featured' , 1)->take(4)->get();
    }
}
/*
    Function: getClubsCount();
    Description: Returns a number (int) of the clubs count
    Initiated through composer.json autoloader
    Usage(s): Navbar, Homepage, ContactUs
*/
function getClubsCount($featured = null){
    if($featured){
        return Club::where('is_featured' , 1)->count();
    }else{
        return Club::count();
    }
}
/*
    Function: getCounterValues();
    Description: Returns an Object with the counter model values
    Initiated through composer.json autoloader
    Usage(s): AboutUsPage
*/
function getCounterValues(){
    return Counter::first();

}
