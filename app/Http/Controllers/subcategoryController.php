<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\subcategory;

class subcategoryController extends Controller
{

public function addsubcategory(Request $request){
   
       $subcategory = DB::table('subcategory')->get();
        return view('admin.subcategory.addsubcategory',compact('subcategory'));
         }
         
  public function savesubcategory(Request $request){
    //dd($request->input());
      $subcategory = new subcategory;
    $subcategory->subcategory = $request->subcategory;
      $res = $subcategory->save();
    if($res){
        return back()->with('success','subcategory added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  
public function listsubcategory(){
           $subcategory = DB::table('subcategory')->get();
        return view('admin.subcategory.listsubcategory',compact('subcategory'));
     }


 public function editsubcategory($id){
         $data= subcategory::findOrFail($id);
        return view('admin.subcategory.editsubcategory',compact('data'));
     }

     public function updatesubcategory(Request $request,$id){
         $subcategory= subcategory::findOrFail($id);
         $subcategory->subcategory = $request->subcategory;
         $subcategory->update();
         $subcategory = subcategory::all();
        return view('admin.subcategory.listsubcategory',compact('subcategory'));
    }

   public function deletesubcategory(Request $request , $id){
         $data= subcategory::findOrFail($id);
         $data->delete();
         return back()->with('success','subcategory deleted successfully');
     }

}