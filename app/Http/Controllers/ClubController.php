<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageLib;

class ClubController extends Controller{
    public function getAdminAll(){
        $Clubs = Club::latest()->get();
        return view('admin.clubs.all', compact('Clubs'));
    }
    public function getAdminNew(){
        return view('admin.clubs.new');
    }
    public function postAdminNew(Request $r){
        //Validate the request
        $r->validate([
            'title' => 'required|min:5',
            'slug' => 'required|min:5|unique:clubs',
            'short_title' => 'required|min:5',
            'description' => 'required',
            'cord_name' => 'required|min:5',
            'cord_phone' => 'required|min:5',
            'members' => 'required',
            'palms' => 'required',
            'image' => 'required|image',
            'background_image' => 'required|image'
        ]);
        //Initiate an array with the article data
        $ClubData = $r->except(['_token', 'image' , 'background_image']);
        $ClubData['slug'] = strtolower(str_replace(' ' , '-' , $r->slug));
        $ClubData['user_id'] = auth()->user()->id;
        //Handle image upload if any (currently the image is required, but if in future the client decoded to make optional we will have the case already considered)
        if($r->has('image')){
            //Resize the image
            $img = ImageLib::make($r->image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/clubs/'.$ClubData['slug'].'.'.$r->image->getClientOriginalExtension());
            //Return the filename
            $ClubData['image'] = $ClubData['slug'].'.'.$r->image->getClientOriginalExtension();
        }
        //Handle background image upload to the server
        if($r->has('background_image')){
            //Resize the image
            $img = ImageLib::make($r->background_image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/club-covers/'.$ClubData['slug'].'.'.$r->background_image->getClientOriginalExtension());
            //Return the filename
            $ClubData['background_image'] = $ClubData['slug'].'.'.$r->background_image->getClientOriginalExtension();
        }
        //Upload the club
        $TheClub = Club::create($ClubData);
        //Log this event
        FireEventLog('Blog', 'Created', $TheClub->id , auth()->user()->id);
        return redirect()->route('admin.clubs.all');
    }
    public function getSingle($slug,$id){
        $TheClub = Club::findOrFail($id);
        return view('clubs.single' , compact('TheClub'));
    }
}
