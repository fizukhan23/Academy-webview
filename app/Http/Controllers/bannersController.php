<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\banners;

class bannersController extends Controller
{

public function addbanners(Request $request){
 
       $banners = DB::table('banners')->get();
        return view('admin.banners.addbanners',compact('banners'));
         }
  public function savebanners(Request $request){
    //dd($request->input());
      $banners = new banners;
      if(!empty($request->photo)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner/").$row->photo;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'photo-'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images/banner'), $image);
        $banners->photo=$image;
        }
    if(!empty($request->video)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/video/").$row->video;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'video-'.time().'.'.$request->video->extension();
        $request->video->move(public_path('images/video'), $image);
        $banners->video=$image;
        }
      $banners->name = $request->name; 
      $banners->link = $request->link;
      if(!empty($request->img2)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner2/").$row->img2;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'img2-'.time().'.'.$request->img2->extension();
        $request->img2->move(public_path('images/banner2'), $image);
        $banners->img2=$image;
        }
         $banners->title2 = $request->title2; 
      $banners->link2 = $request->link2;
      if(!empty($request->img3)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner3/").$row->img2;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'img3-'.time().'.'.$request->img3->extension();
        $request->img3->move(public_path('images/banner3'), $image);
        $banners->img3=$image;
        }
         $banners->title3 = $request->title3; 
      $banners->link3 = $request->link3;
      $res = $banners->save();
    if($res){
        return back()->with('success','banners added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  
     public function listbanners(){ 
           $banners = DB::table('banners')->get();
        return view('admin.banners.listbanners',compact('banners'));
     }

 public function editbanners($id){
         $data= banners::findOrFail($id);
        return view('admin.banners.editbanners',compact('data'));
     }

     public function updatebanners(Request $request,$id){
         $data = banners::findOrFail($id);
       $data = new banners;
      if(!empty($request->photo)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner/").$row->photo;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'photo-'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images/banner'), $image);
        $data->photo=$image;
        }
    if(!empty($request->video)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/video/").$row->video;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'video-'.time().'.'.$request->video->extension();
        $request->video->move(public_path('images/video'), $image);
        $data->video=$image;
        }
      $data->name = $request->name; 
      $data->link = $request->link;
      if(!empty($request->img2)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner2/").$row->img2;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'img2-'.time().'.'.$request->img2->extension();
        $request->img2->move(public_path('images/banner2'), $image);
        $data->img2=$image;
        }
         $data->title2 = $request->title2; 
      $data->link2 = $request->link2;
      if(!empty($request->img3)){
            if($request->post('id')){
                $row = DB::table('banners')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/banner3/").$row->img2;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'img3-'.time().'.'.$request->img3->extension();
        $request->img3->move(public_path('images/banner3'), $image);
        $data->img3=$image;
        }
         $data->title3 = $request->title3; 
      $data->link3 = $request->link3;
         $data->update();
         $banners = banners::all();
        return view('admin.banners.listbanners',compact('banners'));
    }

   public function deletebanners(Request $request , $id){
         $data= banners::findOrFail($id);
         $data->delete();
         return back()->with('success','banners deleted successfully');
     }
  public function listbaner(){ 
           $banners = DB::table('banners')->get();
        return view('academy.indexelegant',compact('banners'));
     }

}