<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\mainbanner;

class mainController extends Controller
{

public function addmainbanner(Request $request){
 
       $mainbanner = DB::table('mainbanner')->get();
        return view('admin.mainbanner.addmainbanner',compact('mainbanner'));
         }
  public function savemainbanner(Request $request){
    //dd($request->input());
      $mainbanner = new mainbanner;
     
    if(!empty($request->video)){
            if($request->post('id')){
                $row = DB::table('mainbanner')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/bannervideo/").$row->video;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'video-'.time().'.'.$request->video->extension();
        $request->video->move(public_path('images/bannervideo'), $image);
        $mainbanner->video=$image;
        }
         if(!empty($request->images)){
            if($request->post('id')){
                $row = DB::table('mainbanner')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/bannerimg/").$row->images;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'images-'.time().'.'.$request->images->extension();
        $request->images->move(public_path('images/bannerimg'), $image);
        $mainbanner->images=$image;
        }
      $res = $mainbanner->save();
    if($res){
        return back()->with('success','mainbanner added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  
     public function listmainbanner(){ 
           $mainbanner = DB::table('mainbanner')->get();
        return view('admin.mainbanner.listmainbanner',compact('mainbanner'));
     }

 public function editmainbanner($id){
         $data= mainbanner::findOrFail($id);
        return view('admin.mainbanner.editmainbanner',compact('data'));
     }

     public function updatemainbanner(Request $request,$id){
         $data= mainbanner::findOrFail($id);
          
    if(!empty($request->video)){
            if($request->post('id')){
                $row = DB::table('mainbanner')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/bannervideo/").$row->video;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'video-'.time().'.'.$request->video->extension();
        $request->video->move(public_path('images/bannervideo'), $image);
        $data->video=$image;
        }
         if(!empty($request->images)){
            if($request->post('id')){
                $row = DB::table('mainbanner')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/bannerimg/").$row->images;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'images-'.time().'.'.$request->images->extension();
        $request->images->move(public_path('images/bannerimg'), $image);
        $data->images=$image;
        }
         $data->update();
         $mainbanner = mainbanner::all();
        return view('admin.mainbanner.listmainbanner',compact('mainbanner'));
    }

   public function deletemainbanner(Request $request , $id){
         $data= mainbanner::findOrFail($id);
         $data->delete();
         return back()->with('success','mainbanner deleted successfully');
     }
 public function listmain(){ 
           $mainbanner = DB::table('mainbanner')->get();
        return view('academy.index-modern',compact('mainbanner'));
     }
}