<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use App\Models\about;

class AboutController extends Controller
{

public function addabout(Request $request){
 
       $about = DB::table('about')->get();
        return view('admin.about.addabout',compact('about'));
         }
  public function saveabout(Request $request){
    //dd($request->input());
      $about = new about;
      $about->option = $request->option; 
     if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('about')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/about/").$row->photo;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/about'), $image);
        $about->image=$image;
        }
      $about->title = $request->title;
      $about->description = $request->description;
      $about->tit1 = $request->tit1;
      $about->descrip1 = $request->descrip1;
      $about->tit2 = $request->tit2;
      $about->descrip2 = $request->descrip2;
      $about->tit3 = $request->tit3;
      $about->descrip3 = $request->descrip3;
      $about->tit4 = $request->tit4;
      $about->descrip4 = $request->descrip4;
      $res = $about->save();
    if($res){
        return back()->with('success','about added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  
     public function listabout(){ 
           $about = DB::table('about')->get();
        return view('admin.about.listabout',compact('about'));
     }

 public function editabout($id){
         $data= about::findOrFail($id);
        return view('admin.about.editabout',compact('data'));
     }

     public function updateabout(Request $request,$id){
       $data= about::findOrFail($id);
        $data->option = $request->option; 
          if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('about')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/about/").$row->photo;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/about'), $image);
        $data->image=$image;
        }
      $data->title = $request->title;
      $data->description = $request->description;
      $data->tit1 = $request->tit1;
      $data->descrip1 = $request->descrip1;
      $data->tit2 = $request->tit2;
      $data->descrip2 = $request->descrip2;
      $data->tit3 = $request->tit3;
      $data->descrip3 = $request->descrip3;
      $data->tit4 = $request->tit4;
      $data->descrip4 = $request->descrip4;
      $data->update();
         $about = about::all();
        return view('admin.about.listabout',compact('about'));
    }

   public function deleteabout(Request $request , $id){
         $data= about::findOrFail($id);
         $data->delete();
         return back()->with('success','about deleted successfully');
     }
   public function about(){ 
           $about =  DB::table('about')->where('option','About Us')->get();
        return view('academy.about',compact('about'));
     }
public function whatwe(){ 
           $about =  DB::table('about')->where('option','What We do')->get();
        return view('academy.index',compact('about'));
     }


}