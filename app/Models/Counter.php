<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model{
    use HasFactory;
    protected $guarded = [];
    public function getHomePathAttribute(){
        return url('storage/app/public/images/heros/'.$this->homepage);
    }
    public function getAboutPathAttribute(){
        return url('storage/app/public/images/heros/'.$this->about);
    }
    public function getContactPathAttribute(){
        return url('storage/app/public/images/heros/'.$this->contact);
    }
    public function getCalendarPathAttribute(){
        return url('storage/app/public/images/heros/'.$this->calendar);
    }
    public function getAcknowledgmentsPathAttribute(){
        return url('storage/app/public/images/heros/'.$this->acknowledgments);
    }
}
