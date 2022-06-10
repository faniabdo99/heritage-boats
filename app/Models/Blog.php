<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model{
    protected $guarded = [];
    use HasFactory;
    public function getIsPromotedTextAttribute(){
        return ($this->is_promoted) ? 'Yes' : 'No';
    }
    public function getImagePathAttribute(){
        return url('storage/app/public/images/blogs/'.$this->image);
    }
    public function getArticleTagsAttribute(){
        if($this->tags){
            if(session()->get('locale') == 'en') {
                $Locale = BlogLocal::where('blog_id' , $this->id)->first();
                if($Locale){
                    return explode(',' ,$Locale->tags_value );
                }else{
                    return explode(',' ,$this->tags );
                }
            }else{
                return explode(',' ,$this->tags );
            }
        }else{
            return null;
        }
    }
    public function User() {
        return $this->belongsTo(User::class , 'user_id');
    }
    public  function Comments(){
        return $this->hasMany(Comment::class , 'blog_id');
    }
    //Translation
    public function getLocalTitleAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            if($Locale){
                return $Locale->title_value;
            }else{
                return $this->title;
            }
        }else{
            return $this->title;
        }
    }
    public function getLocalCategoryAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            if($Locale){
                return $Locale->category_value;
            }else{
                return $this->category;
            }
        }else{
            return $this->category;
        }
    }
    public function getLocalTagsAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            if($Locale){
                return $Locale->tags_value;
            }else{
                return $this->tags;
            }
        }else{
            return $this->tags;
        }
    }
    public function getLocalDescriptionAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            if($Locale){
                return $Locale->description_value;
            }else{
                return $this->description;
            }
        }else{
            return $this->description;
        }
    }
    public function getLocalContentAttribute(){
        if(session()->get('locale') == 'en') {
            $Locale = BlogLocal::where('blog_id' , $this->id)->first();
            if($Locale){
                return $Locale->content_value;
            }else{
                return $this->content;
            }
        }else{
            return $this->content;
        }
    }
}
