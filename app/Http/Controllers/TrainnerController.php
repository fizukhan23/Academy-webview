<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\trainner;
use App\Models\Workshop;


class TrainnerController extends Controller
{
    // add trainner
 public function addtrainner(Request $request){
     return view('admin.trainner.addtrainner');
     }

     public function savetrainner(Request $request){
    //  dd($request->input());
      $trainner = new trainner;
      $trainner->name = $request->name;
      $trainner->surname = $request->surname;
      $trainner->DOB = $request->DOB;
      $trainner->age = $request->age;
      $trainner->gender = $request->gender;
        if(!empty($request->image)){
            if($request->post('id')){
                $row = DB::table('trainner')->where('id', $request->post('id'))->first();
                $image_path = public_path("/images/photo/").$row->image;
                        if(File::exists($image_path)) {
                            File::delete($image_path);
                    }
            }
        $image = 'image-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/photo'), $image);
        $trainner->image=$image;
        }
    
      $trainner->status = $request->status;
      $trainner->address = $request->address;
      $trainner->country = $request->country;
      $trainner->postal_code = $request->postal_code;
      $trainner->mobile = $request->mobile;
     
       if($request->hasfile('qualification'))
         {

            foreach($request->file('qualification') as $image1)
            {
                $name=$image1->getClientOriginalName();
                $image1->move(public_path().'/images/qualification', $name);  
                $data[] = $name;  
            }
         }
    $trainner->qualification = json_encode($data);
    
      $trainner->apptitude = $request->apptitude;
      $trainner->student_evaluation = $request->student_evaluation;
      $trainner->convenient_hours = $request->convenient_hours;
      $trainner->convenient_days = $request->convenient_days;
    $res = $trainner->save();
    if($res){
        return back()->with('success','trainner added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }
  public function edittrainner($id){
         $data= trainner::findOrFail($id);
        return view('admin.trainner.edittrainner',compact('data'));
     }

    public function updatetrainner(Request $request,$id){
         $trainner= trainner::findOrFail($id);
        $trainner->name = $request->name;
      $trainner->surname = $request->surname;
      $trainner->DOB = $request->DOB;
      $trainner->age = $request->age;
      $trainner->gender = $request->gender;
        
       if($request->hasfile('qualification'))
         {

            foreach($request->file('qualification') as $image1)
            {
                $name=$image1->getClientOriginalName();
                $image1->move(public_path().'/images/qualification', $name);  
                $data[] = $name;  
            }
         }
    $trainner->qualification = json_encode($data);
    
      $trainner->status = $request->status;
      $trainner->address = $request->address;
      $trainner->country = $request->country;
      $trainner->postal_code = $request->postal_code;
      $trainner->mobile = $request->mobile;
     
     
      if($request->hasfile('qualification'))
         {

            foreach($request->file('qualification') as $image1)
            {
                $name=$image1->getClientOriginalName();
                $image1->move(public_path().'/images/qualification', $name);  
                $data[] = $name;  
            }
         }
    $trainner->qualification = json_encode($data);
      $trainner->apptitude = $request->apptitude;
      $trainner->student_evaluation = $request->student_evaluation;
      $trainner->convenient_hours = $request->convenient_hours;
      $trainner->convenient_days = $request->convenient_days;
         $trainner->update();
         $trainner = trainner::all();
        return view('admin.trainner.listtrainner',compact('trainner'));  
    }


   public function deletetrainner(Request $request , $id){
         $data= trainner::findOrFail($id);
         $data->delete();
         return back()->with('success','trainner deleted successfully');
     }

public function listcoach(Request $request,$id){
    $workshop = workshop::where('coach_id',$id)->get();
    return view('admin.trainner.addworkshop',compact('workshop'));
     }

 public function saveworkshop(Request $request){
    //  dd($request->input());
      $workshop = new workshop;
      $workshop->coach_id = $request->coach_id;
      $workshop->title = $request->title;
      $workshop->from_date = $request->from_date;
      $workshop->to_date = $request->to_date;
      $workshop->description = $request->description;
      $workshop->duration = $request->duration;
      $res = $workshop->save();
    if($res){
        return back()->with('success','workshop added successfully');
        
    }
    else{
        return back()->with('fail','error');
    }
    //return view('listuser');
     }

    //  view trainner

     public function listtrainner(){
        $trainner = DB::table('trainner')->get();
        return view('admin.trainner.listtrainner',compact('trainner'));
     }

     public function editworkshop($id){
         $data= workshop::findOrFail($id);
        return view('admin.trainner.editworkshop',compact('data'));
     }

     public function updateworkshop(Request $request,$id){
         $workshop= workshop::findOrFail($id);
         $workshop->coach_id = $request->coach_id;
         $workshop->title = $request->title;
         $workshop->from_date = $request->from_date;
         $workshop->to_date = $request->to_date;
         $workshop->description = $request->description;
         $workshop->duration = $request->duration;
         $workshop->update();
         $workshop = workshop::all();
        return view('admin.trainner.addworkshop',compact('workshop'));
     }
   


}
