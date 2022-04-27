<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller{
    public function postNew(Request $r){
        //TODO: Add validation
        Comment::create($r->except('_token'));
        return redirect()->back()->withSuccess('Your Comment has been added');
    }
}
