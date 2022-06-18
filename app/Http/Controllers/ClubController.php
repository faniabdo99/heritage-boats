<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\ClubImage;
use App\Models\ClubLocal;
use App\Models\User;
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
        $ClubData['is_featured'] = ($r->has('is_featured') ? 1 : 0);
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
        FireEventLog('Club', 'Created', $TheClub->id , auth()->user()->id);
        return redirect()->route('admin.clubs.all')->withSuccess('Club has been created');
    }
    public function getAdminEdit($id){
        $TheClub = Club::findOrFail($id);
        return view('admin.clubs.edit' , compact('TheClub'));
    }
    public function postAdminEdit(Request $r , $id){
        //Validate the request
        $r->validate([
            'title' => 'required|min:5',
            'short_title' => 'required|min:5',
            'description' => 'required',
            'cord_name' => 'required|min:5',
            'cord_phone' => 'required|min:5',
            'members' => 'required',
            'palms' => 'required',
            'image' => 'image',
            'background_image' => 'image'
        ]);
        $TheClub = Club::findOrFail($id);
        //Initiate an array with the article data
        $ClubData = $r->except(['_token', 'image' , 'background_image']);
        //Handle image upload if any (currently the image is required, but if in future the client decoded to make optional we will have the case already considered)
        if($r->has('image')){
            //Resize the image
            $img = ImageLib::make($r->image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/clubs/'.$TheClub->slug.'.'.$r->image->getClientOriginalExtension());
            //Return the filename
            $ClubData['image'] = $TheClub->slug.'.'.$r->image->getClientOriginalExtension();
        }
        //Handle background image upload to the server
        if($r->has('background_image')){
            //Resize the image
            $img = ImageLib::make($r->background_image);
            // backup status
            $img->backup();
            $img->fit(600, 600);
            //Upload to server
            $img->save('storage/app/public/images/club-covers/'.$TheClub->slug.'.'.$r->background_image->getClientOriginalExtension());
            //Return the filename
            $ClubData['background_image'] = $TheClub->slug.'.'.$r->background_image->getClientOriginalExtension();
        }
        $ClubData['is_featured'] = ($r->has('is_featured') ? 1 : 0);
        //Upload the club
        $TheClub->update($ClubData);
        //Log this event
        FireEventLog('Club', 'Updated', $TheClub->id , auth()->user()->id);
        return redirect()->route('admin.clubs.all')->withSuccess('Club has been updated');
    }
    public function getAdminAttachments($id){
        $TheClub = Club::findOrFail($id);
        return view('admin.clubs.attachments' , compact('TheClub'));
    }
    public function postGalleryImages(Request $r){
        //Grap the product
        if(!$r->has('club_id') || empty($r->club_id)){
            return response('Something went wrong!' , 400);
        }
        $TheClub = Club::find($r->club_id);
        if(!$TheClub){
            return response('There is no such club!' , 404);
        }
        $GalleryData['club_id'] = $r->club_id;
        //Upload the file.
        if($r->has('file')){
            //Handle background image upload
            $GalleryData['image'] = $TheClub->slug.'-'.rand(1,9999999).'-'.date('ymdhis').'.'.$r->file->getClientOriginalExtension();
            $r->file->storeAs('public/images/clubs/gallery/' , $GalleryData['image']);
        }
        ClubImage::create($GalleryData);
        return response('All clear!' , 200);
    }
    public function deleteGalleryImage($id){
        $TheGallery = ClubImage::where('club_id' , $id)->get();
        $TheGallery->map(function($item){
            $item->delete();
        });
        //Log this event
        FireEventLog('Club', 'AttachmentsDeleted', $id, auth()->user()->id);
        return back()->withSuccess('Gallery has been cleared');
    }
    public function postDeleteClub(Request $r){
        if($r->has('club_id') && $r->has('admin_id')){
            //Validate the admin
            $Admin = User::find($r->admin_id);
            if($Admin){
                if(in_array($Admin->role , [1,2])){
                    //Looks good, search the item
                    $TheClub = Club::findOrFail($r->club_id);
                    if($TheClub){
                        FireEventLog('Club', 'Deleted', $TheClub->id , $r->admin_id);
                        $TheClub->delete();
                        return response('Club has been deleted' , 200);
                    }else{
                        return response('Club is already deleted' , 404);
                    }
                }else{
                    return response('Something went wrong' , 403);
                }
            }else{
                return response('Something went wrong' , 403);
            }
        }else{
            return response('Something went wrong! Please refresh the page and try again' , 400);
        }
    }
    //Localization
    public function getLocalize($id){
        $TheClub = Club::findOrFail($id);
        $ClubLocal = ClubLocal::where('club_id' , $id)->first();
        return view('admin.clubs.localize' , compact('TheClub' , 'ClubLocal'));
    }
    public function postLocalize(Request $r){
        $r->validate([
            'title_value' => 'required|min:5',
            'short_title_value' => 'required|min:5',
            'description_value' => 'required',
            'cord_name_value' => 'required|min:5'
        ]);
        $CurrentLocal = ClubLocal::where('club_id' , $r->club_id)->first();
        if($CurrentLocal){
            $CurrentLocal->update($r->all());
        }else{
            ClubLocal::create($r->all());
        }
        FireEventLog('Club', 'Translated', $r->club_id , auth()->user()->id);
        return redirect()->route('admin.clubs.all')->withSuccess('The club data has been translated');
    }
    //Front end methods
    public function getSingle($slug,$id){
        $TheClub = Club::findOrFail($id);
        return view('clubs.single' , compact('TheClub'));
    }
}
