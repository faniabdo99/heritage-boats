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
    public function User() {
        return $this->belongsTo(User::class , 'user_id');
    }
}
