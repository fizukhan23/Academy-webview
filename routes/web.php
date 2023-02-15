<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainnerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\bannersController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CombineController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/shop-light', function () {
    return view('academy/shop-light');
});
Route::get('/team', function () {
    return view('academy/team');
});
Route::get('/project-wide-4-cols', function () {
    return view('academy/project-wide-4-cols');
});
Route::get('/contact', function () {
    return view('academy/contact');
});

Route::get('/returnpolicy', function () {
    return view('academy/returnpolicy');
});
Route::get('/shipping', function () {
    return view('academy/shipping');
});
Route::get('/course&guildline', function () {
    return view('academy/course&guildline');
});
Route::get('/howtogoabout', function () {
    return view('academy/howtogoabout');
});
Route::get('/terms&condition', function () {
    return view('academy/term&condition');
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//change
Route::get('change', [AdminController::class, 'change']);

Route::get('changeedit',[AdminController::class,'changeedit']);

Route::post('changeupdate/{id}',[AdminController::class,'changeupdate']);


//trainner(admin)
 Route::get('/addtrainner',[TrainnerController::class,'addtrainner']);
 Route::post('/savetrainner',[TrainnerController::class,'savetrainner']);
  Route::post('/saveworkshop',[TrainnerController::class,'saveworkshop']);
  Route::get('/listcoach/{id}',[TrainnerController::class,'listcoach']);
   Route::get('/editworkshop/{id}',[TrainnerController::class,'editworkshop']);
 Route::put('/updateworkshop/{id}',[TrainnerController::class,'updateworkshop']);
 Route::get('/deleteworkshop/{id}',[TrainnerController::class,'deleteworkshop']);
 
 Route::get('/listtrainner',[TrainnerController::class,'listtrainner']);
 Route::get('/edittrainner/{id}',[TrainnerController::class,'edittrainner']);
 Route::put('/updatetrainner/{id}',[TrainnerController::class,'updatetrainner']);
 Route::get('/deletetrainner/{id}',[TrainnerController::class,'deletetrainner']);
 
 //student(admin)
 Route::get('/addstudent',[StudentController::class,'addstudent']);
 Route::post('/savestudent',[StudentController::class,'savestudent']);
 Route::post('/savereport',[StudentController::class,'savereport']);
 Route::get('/listreport/{id}',[StudentController::class,'listreport']);
  Route::get('/editreport/{id}',[StudentController::class,'editreport']);
  Route::put('/updatereport/{id}',[StudentController::class,'updatereport']);
   Route::get('/deletereport/{id}',[StudentController::class,'deletereport']);
 Route::get('/liststudent',[StudentController::class,'liststudent']);
 Route::get('/proreportlist/{id}',[StudentController::class,'proreportlist']);
 Route::get('/editstudent/{id}',[StudentController::class,'editstudent']);
 Route::put('/updatestudent/{id}',[StudentController::class,'updatestudent']);
 Route::get('/deletestudent/{id}',[StudentController::class,'deletestudent']);


 //Course(admin)
 Route::get('/addcourse',[CourseController::class,'addcourse']);
 Route::post('/savecourse',[CourseController::class,'savecourse']);
 Route::get('/listcourse',[CourseController::class,'listcourse']);
 Route::get('/editcourse/{id}',[CourseController::class,'editcourse']);
 Route::put('/updatecourse/{id}',[CourseController::class,'updatecourse']);
 Route::get('/deletecourse/{id}',[CourseController::class,'deletecourse']);


 Route::get('/addcategory',[categoryController::class,'addcategory']);
 Route::post('/savecategory',[categoryController::class,'savecategory']);
 Route::get('/listcategory',[categoryController::class,'listcategory']);
 Route::get('/editcategory/{id}',[categoryController::class,'editcategory']);
 Route::put('/updatecategory/{id}',[categoryController::class,'updatecategory']);
 Route::get('/deletecategory/{id}',[categoryController::class,'deletecategory']);
 
 Route::get('/addsubcategory',[subcategoryController::class,'addsubcategory']);
 Route::post('/savesubcategory',[subcategoryController::class,'savesubcategory']);
 Route::get('/listsubcategory',[subcategoryController::class,'listsubcategory']);
 Route::get('/editsubcategory/{id}',[subcategoryController::class,'editsubcategory']);
 Route::put('/updatesubcategory/{id}',[subcategoryController::class,'updatesubcategory']);
 Route::get('/deletesubcategory/{id}',[subcategoryController::class,'deletesubcategory']);

  Route::get('/addbanners',[bannersController::class,'addbanners']);
 Route::post('/savebanners',[bannersController::class,'savebanners']);
 Route::get('/listbanners',[bannersController::class,'listbanners']);
 Route::get('/indexelegant',[bannersController::class,'listbaner']);
 Route::get('/editbanners/{id}',[bannersController::class,'editbanners']);
 Route::put('/updatebanners/{id}',[bannersController::class,'updatebanners']);
 Route::get('/deletebanners/{id}',[bannersController::class,'deletebanners']);

  Route::get('/addmainbanner',[mainController::class,'addmainbanner']);
 Route::post('/savemainbanner',[mainController::class,'savemainbanner']);
 Route::get('/listmainbanner',[mainController::class,'listmainbanner']);
  Route::get('/index-modern',[mainController::class,'listmain']);
 Route::get('/editmainbanner/{id}',[mainController::class,'editmainbanner']);
 Route::put('/updatemainbanner/{id}',[mainController::class,'updatemainbanner']);
 Route::get('/deletemainbanner/{id}',[mainController::class,'deletemainbanner']);


   Route::get('/addabout',[AboutController::class,'addabout']);
 Route::post('/saveabout',[AboutController::class,'saveabout']);
 Route::get('/listabout',[AboutController::class,'listabout']);
  Route::get('/about',[AboutController::class,'about']);
  Route::get('/index',[AboutController::class,'whatwe']);
 Route::get('/editabout/{id}',[AboutController::class,'editabout']);
 Route::put('/updateabout/{id}',[AboutController::class,'updateabout']);
 Route::get('/deleteabout/{id}',[AboutController::class,'deleteabout']);

    Route::get('/addcombine',[CombineController::class,'addcombine']);
 Route::post('/savecombine',[CombineController::class,'savecombine']);
 Route::get('/listcombine',[CombineController::class,'listcombine']);
 Route::get('/editcombine/{id}',[CombineController::class,'editcombine']);
 Route::put('/updatecombine/{id}',[CombineController::class,'updatecombine']);
 Route::get('/deletecombine/{id}',[CombineController::class,'deletecombine']);