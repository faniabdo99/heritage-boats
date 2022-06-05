<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubImage extends Model{
    use HasFactory;
    protected $guarded = [];
    public function getImageSrcAttribute(){
        return url('storage/app/public/images/clubs/gallery/' . $this->image);
    }
}
