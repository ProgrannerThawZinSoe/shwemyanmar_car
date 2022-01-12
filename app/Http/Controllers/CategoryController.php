<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //index
    public function index(){
        $users = Category::orderBy('id','DESC')->get();
        return view("admin.category",["users"=>$users]);
    }

    //create
    public function create(Request $request){
        $name = $request->category;
        $categoryDB = new Category;
        $categoryDB->name = $name;
        $categoryDB->save();
        return redirect("/admin/category")->with('info','Category Create Success');;
    }

    //Delete
    public function delete(Request $request){
        $category = Category::find($request->id);
        $category->delete();
        return redirect("admin/category")->with('info','User Delete Success');
    }

    //edit
    public function edit(Request $request){
        $category = Category::find($request->id);
        $users = Category::orderBy('id','DESC')->get();
        return view("admin/edit_category",[
            "category" => $category,
            "users"=>$users
        ]);
      
    }
}
