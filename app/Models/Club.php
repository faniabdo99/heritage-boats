<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model{
    use HasFactory;
    protected $guarded = [];
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
        if(session()->get('locale') == 'en') {
//            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            $Locale = null;
            if($Locale){
//                return $Locale->title_value;
                return $this->title;
            }else{
                return $this->title;
            }
        }else{
            return $this->title;
        }
    }
    public function getLocalShortTitleAttribute(){
        return $this->short_title;
    }
    public function getLocalDescriptionAttribute(){
        return $this->description;
    }
    public function getLocalCordNameAttribute(){
        return $this->cord_name;
    }
}
