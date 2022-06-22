<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageLib;

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
    public function getHero(){
        return view('admin.heros.edit');
    }
    public function postHero(Request $r){
        $HeroData = [];
        if($r->has('homepage')){
            $img = ImageLib::make($r->homepage);
            $img->save('storage/app/public/images/heros/homepage.'.$r->homepage->getClientOriginalExtension());
            $HeroData['homepage'] = 'homepage.'.$r->homepage->getClientOriginalExtension();
        }
        if($r->has('about')){
            $img = ImageLib::make($r->about);
            $img->save('storage/app/public/images/heros/about.'.$r->about->getClientOriginalExtension());
            $HeroData['about'] = 'about.'.$r->about->getClientOriginalExtension();
        }
        if($r->has('contact')){
            $img = ImageLib::make($r->contact);
            $img->save('storage/app/public/images/heros/contact.'.$r->contact->getClientOriginalExtension());
            $HeroData['contact'] = 'contact.'.$r->contact->getClientOriginalExtension();
        }
        if($r->has('acknowledgments')){
            $img = ImageLib::make($r->acknowledgments);
            $img->save('storage/app/public/images/heros/acknowledgments.'.$r->acknowledgments->getClientOriginalExtension());
            $HeroData['acknowledgments'] = 'acknowledgments.'.$r->acknowledgments->getClientOriginalExtension();
        }
        if($r->has('calendar')){
            $img = ImageLib::make($r->calendar);
            $img->save('storage/app/public/images/heros/calendar.'.$r->calendar->getClientOriginalExtension());
            $HeroData['calendar'] = 'calendar.'.$r->calendar->getClientOriginalExtension();
        }
        Counter::updateOrCreate(
            ['id' => '1'],
            $HeroData
        );
        return back()->withSuccess('Hero images has been updated');
    }
}
