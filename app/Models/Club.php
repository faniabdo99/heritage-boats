<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model{
    use HasFactory;
    protected $guarded = [];
    private function getClubLocale(){
        if(session()->get('locale') == 'en') {
            $Locale = ClubLocal::where('club_id' , $this->id)->first();
            if($Locale){
                return $Locale;
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
    public function getImageSrcAttribute(){
        return url('storage/app/public/images/clubs/'.$this->image);
    }
    public function getBackgroundImageSrcAttribute(){
        return url('storage/app/public/images/club-covers/'.$this->background_image);
    }
    //Relations
    public function Gallery(){
        return $this->hasMany(ClubImage::class,'club_id');
    }
    public function getLocalTitleAttribute(){
        if($this->getClubLocale()){
            return $this->getClubLocale()->title_value;
        }else{
            return $this->title;
        }
    }
    public function getLocalShortTitleAttribute(){
        if($this->getClubLocale()){
            return $this->getClubLocale()->short_title_value;
        }else{
            return $this->short_title;
        }
    }
    public function getLocalDescriptionAttribute(){
        if($this->getClubLocale()){
            return $this->getClubLocale()->description_value;
        }else{
            return $this->description;
        }
    }
    public function getLocalCordNameAttribute(){
        if($this->getClubLocale()){
            return $this->getClubLocale()->cord_name_value;
        }else{
            return $this->cord_name;
        }
    }
}
