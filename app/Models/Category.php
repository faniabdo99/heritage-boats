<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    use HasFactory;
    protected $guarded = [];
    public function getIsPromotedTextAttribute(){
        return ($this->is_promoted) ? 'Yes' : 'No';
    }
    public function Blog(){
        return $this->hasMany(Blog::class, 'category_id');
    }
    //Translation
    public function getLocalTitleAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = CategoryLocal::where('category_id' , $this->id)->first();
            if($Locale){
                return $Locale->title_value;
            }else{
                return $this->title;
            }
        }else{
            return $this->title;
        }
    }
}
