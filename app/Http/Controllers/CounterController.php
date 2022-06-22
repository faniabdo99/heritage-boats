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
            //Handle image upload
            //Resize the image
            $img = ImageLib::make($r->homepage);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/heros/homepage.'.$r->homepage->getClientOriginalExtension());
            //Return the filename
            $HeroData['homepage'] = 'homepage.'.$r->homepage->getClientOriginalExtension();
        }
        if($r->has('about')){
            //Handle image upload
            //Resize the image
            $img = ImageLib::make($r->about);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/heros/about.'.$r->about->getClientOriginalExtension());
            //Return the filename
            $HeroData['about'] = 'about.'.$r->about->getClientOriginalExtension();
        }
        if($r->has('contact')){
            //Handle image upload
            //Resize the image
            $img = ImageLib::make($r->contact);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/heros/contact.'.$r->contact->getClientOriginalExtension());
            //Return the filename
            $HeroData['contact'] = 'contact.'.$r->contact->getClientOriginalExtension();
        }
        if($r->has('acknowledgments')){
            //Handle image upload
            //Resize the image
            $img = ImageLib::make($r->acknowledgments);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/heros/acknowledgments.'.$r->acknowledgments->getClientOriginalExtension());
            //Return the filename
            $HeroData['acknowledgments'] = 'acknowledgments.'.$r->acknowledgments->getClientOriginalExtension();
        }
        if($r->has('calendar')){
            //Handle image upload
            //Resize the image
            $img = ImageLib::make($r->calendar);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/heros/calendar.'.$r->calendar->getClientOriginalExtension());
            //Return the filename
            $HeroData['calendar'] = 'calendar.'.$r->calendar->getClientOriginalExtension();
        }
        Counter::updateOrCreate(
            ['id' => '1'],
            $HeroData
        );
        return back()->withSuccess('Hero images has been updated');
    }
}
