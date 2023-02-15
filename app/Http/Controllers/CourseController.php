<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\course;
use App\Models\category;
use App\Models\subcategory;


class CourseController extends Controller
{
    // add course
 public function addcourse(Request $request){
     $data1 = category::all();
     $data2 = subcategory::all();
      $datas = DB::table('course')->join('category','course.catid','=','category.id')
     ->join('subcategory','course.subid','=','subcategory.id')
      ->select('category.category as catname','subcategory.subcategory as subname','course.id','course.name','course.description','course.syllebus','course.duration','course.time','course.trainer','course.price','course.accreditation','course.pre_reuqisite','course.mode','course.video','course.equipment_need')->get();
     return view('admin.course.addcourse',compact('data1','data2','datas'));
     }

     public function savecourse(Request $request){
      $course = new course;
      $course->catid = $request->data1;
      $course->subid = $request->data2;
      $course->name = $request->name;
      $course->description = $request->description;
      $course->syllebus = $request->syllebus;
      $course->duration = $request->duration;
      $course->time = $request->time;
      $course->trainer = $request->trainer;
      $course->price = $request->price;
      $course->accreditation = $request->accreditation;
      $course->pre_reuqisite = $request->pre_reuqisite;
      $course->mode = $request->mode;
       if($request->hasfile('video'))
         {

            foreach($request->file('video') as $image1)
            {
                $name=$image1->getClientOriginalName();
                $image1->move(public_path().'/images/video', $name);  
                $data[] = $name;  
            }
         }
    $course->video = json_encode($data);
      

      $course->equipment_need = $request->equipment_need;
      $res = $course->save();
    if($res){
        return back()->with('success','course added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }




    //  view course

     public function listcourse(){
        $data1 = category::all();
      $data2 = subcategory::all();
     $data = DB::table('course')->join('category','course.catid','=','category.id')
     ->join('subcategory','course.subid','=','subcategory.id')
     ->select('category.category as catname','subcategory.subcategory as subname','course.id','course.name','course.description','course.syllebus','course.duration','course.time','course.trainer','course.price','course.accreditation','course.pre_reuqisite','course.mode','course.video','course.equipment_need')->get();
     return view('admin.course.listcourse',compact('data1','data2','data'));
     }

     public function editcourse($id){
         $data= course::findOrFail($id);
           $data1 = category::all();
      $data2 = subcategory::all();
        return view('admin.course.editcourse',compact('data1','data2','data'));
     }

     public function updatecourse(Request $request,$id){
      $course= course::findOrFail($id);
      $course->catid = $request->data1;
      $course->subid = $request->data2;
      $course->name = $request->name;
      $course->description = $request->description;
      $course->syllebus = $request->syllebus;
      $course->duration = $request->duration;
      $course->time = $request->time;
      $course->trainer = $request->trainer;
      $course->price = $request->price;
      $course->accreditation = $request->accreditation;
      $course->pre_reuqisite = $request->pre_reuqisite;
      $course->mode = $request->mode;
      
      if(!empty($request->video)){
            if($request->post('id')){
                $row = DB::table('course')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/video/").$row->video;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'video-'.time().'.'.$request->video->extension();
        $request->video->move(public_path('images/video'), $image);
        $course->video=$image;
        }

        $course->equipment_need = $request->equipment_need;
        $course->update();
        $data = course::all();
        $data1 = category::all();
      $data2 = subcategory::all();
        return view('admin.course.listcourse',compact('data1','data2','data'));
        
        
     }
      public function deletecourse(Request $request , $id){
         $data= course::findOrFail($id);
         $data->delete();
         return back()->with('success','course deleted successfully');
     }


}


