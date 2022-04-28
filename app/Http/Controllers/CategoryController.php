<?php

namespace App\Http\Controllers;

use App\Models\CategoryLocal;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller{
    public function getAdminAll(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        $Categories = Category::latest()->get();
        return view('admin.categories.all' , compact('Categories'));
    }
    public function getNew(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        return view('admin.categories.new');
    }
    public function postNew(Request $r){
        $r->validate([
            'title' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        $CategoryData = $r->all();
        $CategoryData['is_promoted'] = ($r->has('is_promoted')) ? 1 : 0;
        Category::create($CategoryData);
        return redirect()->route('admin.categories.all')->withSuccess('Category has been created!');
    }
    public function getEdit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application {
        $TheCategory = Category::findOrFail($id);
        if(!$TheCategory){
            abort(404);
        }
        return view('admin.categories.edit' , compact('TheCategory'));
    }
    public function postEdit(Request $r, $id){
        $TheCategory = Category::findOrFail($id);
        if(!$TheCategory){
            abort(404);
        }
        $r->validate([
            'title' => 'required',
        ]);
        $CategoryData = $r->all();
        $CategoryData['is_promoted'] = ($r->has('is_promoted')) ? 1 : 0;
        $TheCategory->update($CategoryData);
        return redirect()->route('admin.categories.all')->withSuccess('Category has been updated!');
    }
    public function getLocalize($id){
        $TheCategory = Category::findOrFail($id);
        if(!$TheCategory){
            abort(404);
        }
        return view('admin.categories.localize' , compact('TheCategory'));
    }
    public function postLocalize(Request $r, $id){
        $r->validate([
            'title_value' => 'required'
        ]);
        $CategoryLocalData = $r->all();
        $CategoryLocalData['category_id'] = $id;
        CategoryLocal::create($CategoryLocalData);
        return redirect()->route('admin.categories.all')->withSuccess('Category Translated Successfully');
    }

    public function postDeleteCategory(Request $r){
        if($r->has('category_id') && $r->has('admin_id')){
            //Validate the admin
            $Admin = User::find($r->admin_id);
            if($Admin){
                if(in_array($Admin->role , [1,2])){
                    //Looks good, search the item
                    $TheCategory = Category::findOrFail($r->category_id);
                    if($TheCategory){
                        FireEventLog('Category', 'Deleted', $TheCategory->id , $r->admin_id);
                        $TheCategory->delete();
                        return response('Category has been deleted' , 200);
                    }else{
                        return response('Category is already deleted' , 404);
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
}
