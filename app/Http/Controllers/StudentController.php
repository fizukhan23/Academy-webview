<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\student;
use App\Models\pro_report;

class StudentController extends Controller
{
    // add student
 public function addstudent(Request $request){
     return view('admin.student.addstudent');
     }

     public function savestudent(Request $request){
    //dd($request->input());
      $student = new student;
      $student->name = $request->name;
      $student->surname = $request->surname;
      $student->DOB = $request->DOB;
      $student->age = $request->age;
      $student->gender = $request->gender;
      if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('student')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/image/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/image'), $image);
        $student->image=$image;
        }
    
      $student->res_party = $request->res_party;
      $student->res_partyid = $request->res_partyid;
      $student->address = $request->address;
      $student->postal_code = $request->postal_code;
      $student->country = $request->country;
      $student->phone = $request->phone;
      $student->parent_phone = $request->parent_phone;
      $student->stu_course = $request->stu_course;
      $student->mem_fes = $request->mem_fes;
      $student->mem_date = $request->mem_date;
      $student->monthly_fee = $request->monthly_fee;
      $student->mon_date = $request->mon_date;  
      $student->regis_fee = $request->regis_fee;  
      $student->regis_date = $request->regis_date;  
      $student->re_takingcourse = $request->re_takingcourse;
      $student->remark = $request->remark;
      $res = $student->save();
    if($res){
        return back()->with('success','student added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }

    //  view student
  public function liststudent(){
        $student = DB::table('student')->get();
        return view('admin.student.liststudent',compact('student'));
     }

public function editstudent($id){
         $data= student::findOrFail($id);
        return view('admin.student.editstudent',compact('data'));
     }

 public function updatestudent(Request $request,$id){
      $student= student::findOrFail($id);
      $student->name = $request->name;
      $student->surname = $request->surname;
      $student->DOB = $request->DOB;
      $student->age = $request->age;
      $student->gender = $request->gender;
      if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('student')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/image/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/image'), $image);
        $student->image=$image;
        }
    
      $student->res_party = $request->res_party;
      $student->res_partyid = $request->res_partyid;
      $student->address = $request->address;
      $student->postal_code = $request->postal_code;
      $student->country = $request->country;
      $student->phone = $request->phone;
      $student->parent_phone = $request->parent_phone;
      $student->stu_course = $request->stu_course;
      $student->mem_fes = $request->mem_fes;
      $student->mem_date = $request->mem_date;
      $student->monthly_fee = $request->monthly_fee;
      $student->mon_date = $request->mon_date;  
      $student->regis_fee = $request->regis_fee;  
      $student->regis_date = $request->regis_date;  
      $student->re_takingcourse = $request->re_takingcourse;
      $student->remark = $request->remark;
         $student->update();
         $student = student::all();
        return view('admin.student.liststudent',compact('student'));
    }
 public function deletestudent(Request $request , $id){
         $data= student::findOrFail($id);
         $data->delete();
         return back()->with('success','student deleted successfully');
     }




public function listreport(Request $request,$id){
    $pro_report = pro_report::where('student_id',$id)->get();
    return view('admin.student.addreport',compact('pro_report'));
     }

 public function savereport(Request $request){
    //dd($request->input());
      $pro_report = new pro_report;
      $pro_report->student_id = $request->student_id;
      $pro_report->skill = $request->skill;  
      $pro_report->description = $request->description;
      $res = $pro_report->save();
    if($res){
        return back()->with('success','student added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }

     public function editreport($id){
         $data= pro_report::findOrFail($id);
        return view('admin.student.editreport',compact('data'));
     }

    public function updatereport(Request $request,$id){
      $pro_report= pro_report::findOrFail($id);
      $pro_report->student_id = $request->student_id;
      $pro_report->skill = $request->skill;  
      $pro_report->description = $request->description;
      $pro_report->update();
      $pro_report = pro_report::all();
        return view('admin.student.addreport',compact('pro_report'));
    }

      public function deletereport(Request $request , $id){
         $data= pro_report::findOrFail($id);
         $data->delete();
         return back()->with('success','pro report deleted successfully');
     }
     
     public function proreportlist($id){
        $pro_report = pro_report::where('id',$id)->get();
        return view('admin.student.pro-report',compact('pro_report'));
     }

  
     


}
