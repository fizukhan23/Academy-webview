<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\combine;

class CombineController extends Controller
{
    //

    public function addcombine(request $request){
       $combine = DB::table('combine')->get();
        return view('admin.combine.addcombine',compact('combine'));
    }

 public function savecombine(Request $request){
    //dd($request->input());
      $combine = new combine;
      $combine->option = $request->option; 
      $combine->heading = $request->heading;
      $combine->paragraph = $request->paragraph;
      $combine->description = $request->description;
      $res = $combine->save();
    if($res){
        return back()->with('success','combine added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }

  public function listcombine(){ 
           $combine = DB::table('combine')->get();
        return view('admin.combine.listcombine',compact('combine'));
     }

public function editcombine($id){
         $data= combine::findOrFail($id);
        return view('admin.combine.editcombine',compact('data'));
     }
 public function updatecombine(Request $request,$id){
         $combine= combine::findOrFail($id);
         $combine->option = $request->option;
         $combine->heading = $request->heading;
         $combine->paragraph = $request->paragraph;
         $combine->description = $request->description;
         $combine->update();
         $combine = combine::all();
        return view('admin.combine.listcombine',compact('combine'));
    }

   public function deletecombine(Request $request , $id){
         $data= combine::findOrFail($id);
         $data->delete();
         return back()->with('success','combine deleted successfully');
     }


}
