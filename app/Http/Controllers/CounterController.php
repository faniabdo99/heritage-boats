<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller{
    public function getUpdate(){
        $Counters = Counter::first();
        return view('admin.counter.edit' , compact('Counters'));
    }
    public function postUpdate(Request $r){
        $r->validate([
            'clubs' => 'required',
            'events' => 'required',
            'visits' => 'required'
        ]);
        Counter::updateOrCreate(
            ['id' => '1'],
            $r->except('_token')
        );
        return back()->withSuccess('Counter values updated!');
    }
}
