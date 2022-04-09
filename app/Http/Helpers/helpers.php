<?php
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
