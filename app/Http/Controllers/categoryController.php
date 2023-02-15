<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\category;

class categoryController extends Controller
{

public function addcategory(Request $request){
 
       $category = DB::table('category')->get();
        return view('admin.category.addcategory',compact('category'));
         }
  public function savecategory(Request $request){
    //dd($request->input());
      $category = new category;
      $category->option = $request->option; 
      $category->category = $request->category;
      $res = $category->save();
    if($res){
        return back()->with('success','category added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  
     public function listcategory(){ 
           $category = DB::table('category')->get();
        return view('admin.category.listcategory',compact('category'));
     }

 public function editcategory($id){
         $data= category::findOrFail($id);
        return view('admin.category.editcategory',compact('data'));
     }

     public function updatecategory(Request $request,$id){
         $category= category::findOrFail($id);
         $category->option = $request->option;
         $category->category = $request->category;
         $category->update();
         $category = category::all();
        return view('admin.category.listcategory',compact('category'));
    }

   public function deletecategory(Request $request , $id){
         $data= category::findOrFail($id);
         $data->delete();
         return back()->with('success','category deleted successfully');
     }

}