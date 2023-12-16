<?php

use App\Http\Controllers\api\CourseController as ApiCourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
Route::prefix("/course")->name("course.")->group(function(){
         Route::get('/',function(){
             return view('course.index');
         })->name("index");
        
         Route::get('/add',function(){
             return "ajout cours";
         })->name("add");
        
         Route::get('/{id}-{title}',function($id,$title){
             //dump($request->input("id"));
             return ["id"=>$id,"title"=>$title];
         })->where(['id'=> '[0-9]+','title'=>'[a-z0-9\-]+'])->name("show");
         //function(Request $request)
         //["helloid"=>1,"title"=>"cour id"];
         Route::get("/new",function(){

         })->name("new");
    
});

Route::get('contact',function(){
    return view("contact");
})->name("contact");

Route::get("about",function(){
    return view("about");
})->name("about");*/

Route::get('/', function () {
  
    return view('welcome');
})->name("home");

Route::get('/about', function () {  return view('about'); })->name("about");


Route::get('contact', [ContactController::class,'contact'])->name("contact");
Route::post('/contact',[ContactController::class,'ajout']);

//Route::get('/404', function () {  return view('404'); })->name("404");


Route::prefix("/course")->name("course.")->controller(CourseController::class)->group(function(){

//$cours=['id'=>1,'titre'=>'cours laravel'];
    Route::get('/','index'/*function//(){
          return view('course.index');//,['c'=>$cours]);

    }*/ )->name("index");

  Route::get("/show/{slug}-{id}",'show')->where(['id'=>'[0-9]+','slug'=>'[a-z0-9\-]+'])-> name("show");
  //     return view ('course.show');
        
   Route::get ("/new",'new')->name("new")->middleware('auth');    
    Route::post("/new","store");
    Route::get("/edit/{cours}","edit")->middleware('auth');
    Route::post("/edit/{cours}","update");
    Route::delete("/delete/{cours}","delete")->name("remove");
    Route::get("/categorie/{categorie}",'indexCategorie');
});
/*Route::prefix('documents')->group(function(){
    Route::resource('article',ArticleController::class);

});*/
Route::resource('courses',ApiCourseController::class);


Route::get('/login',[AuthController::class,"login"])->name("login")->middleware('guest');
Route::post('/login',[AuthController::class,"connect"]);
Route::get("logout",[AuthController::class,"logout"])->name('logout');
Route::get('/create',[AuthController::class,"create"]);
Route::get('/register',[AuthController::class,"register"])->name("register");


