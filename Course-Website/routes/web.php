<?php

use App\Http\Controllers\CoursepageController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/posts/{id}',function ($id) {
    return response('Post ' . $id);
})->where('id','[0-9]+');

Route::get('/search', function(Request $request){
    //dd($request);
    return $request->name . ' ' . $request->city;
});

//Listing

//All
Route::get('/list',[ListingController::class, 'index']);

//Create view
Route::get('/list/create',[ListingController::class, 'create'])->middleware('auth');

//Store (POST request)
Route::post('/list/validate',[ListingController::class, 'store'])->middleware('auth');

//Edit view
Route::get('/list/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

//Update 
Route::put('/list/{listing}/validate',[ListingController::class, 'update'])->middleware('auth');

//Destroy view
Route::delete('/list/{listing}/delete',[ListingController::class, 'destroy'])->middleware('auth');

//Manage View
Route::get('/list/manage',[ListingController::class, 'manage'])->middleware('auth');

//Register form
Route::get('/list/register',[UserController::class, 'register'])->middleware('guest');

//Validate User
Route::post('/list/validateUser',[UserController::class, 'store'])->middleware('guest');

//Logout User
Route::post('/list/logout',[UserController::class, 'logout'])->middleware('auth');

//login form
Route::get('/list/login',[UserController::class, 'login'])->name('login')->middleware('guest');
/*Reason to name the route: No hardcoded URLs
Automatic encoding/decoding of params
Prevents you from having a typo in the url

Ex:<a href="{{ route('login') }}">Login</a>
*/
//login form
Route::post('/list/authority',[UserController::class, 'authority'])->middleware('guest');

//Single Listing
Route::get('/list/{listing}',[ListingController::class, 'show']);



//Common Resource Routes
//index - Show all listings
//show - Show a specific list 
//create - Show form to create a new list 
//store
//edit
//update
//destroy

//Steps for creating a functionality:
//New Route --> New Controller --> New View

//Show create form 

//Auth
/* Auth::routes([
    //If you dont include this this authentication wont work
    'verify' => true;
]) 

*/

//Website Course
//Home Route
Route::get('/course',[CoursepageController::class, 'HomeView']); //-->middleware('verified')
//All Road Maps
Route::get('/course/roadmaps',[CoursepageController::class, 'AllRoadMapsView']);
//All Courses
Route::get('/course/allcourses',[CoursepageController::class, 'AllCoursesView']);
//My courses
Route::get('/course/mycourse',[CoursepageController::class, 'MyLearningView']);
//Detail Road Map
Route::get('/course/roadmap/{roadmapID}',[CoursepageController::class, 'DetailRoadMapView']);
//Detail course
Route::get('/course/{courseID}',[CoursepageController::class, 'DetailCourseView']);

//Learning Page (need courseID - chapterID(from last access))
Route::get('/course/mycourse/{courseID}/{chapterID}',[CoursepageController::class, 'ResumeLearningView']);
