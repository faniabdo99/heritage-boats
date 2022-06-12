<?php

use App\Models\Club;
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
    Function: getClubs();
    Description: Get a Laravel collection of all the clubs in the system
    Initiated through composer.json autoloader
    Usage(s): Navbar, Homepage, ContactUs
*/
function getClubs($skip = null){
    if($skip){
        $TotalClubs = Club::count();
        if($skip > $TotalClubs){
            $take = 4;
        }else{
            $take = $TotalClubs - $skip;
        }
        return Club::latest()->skip($skip)->take($take)->get();
    }else{
        return Club::latest()->get();
    }
}
