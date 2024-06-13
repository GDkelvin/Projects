<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursepageController extends Controller
{
    //Home View
    public function HomeView(){
        
        return view('courseView.HomeView');
    }
    //All roadmaps View
    public function AllRoadMapsView(){
        //Nhận filter - sort - search từ route
        //Call db và trả dữ liệu ở đây
        return view('courseView.AllRoadMaps');
    }

    //Detail Road Map View
    public function DetailRoadMapView(){
        //Nhận id từ route 
    }

    //All courses View
    public function AllCoursesView(){
        //Nhận filter - sort - search từ route
        //Call db và trả dữ liệu ở đây
        return view('courseView.AllCourseView');
    }

    //Detail Subject View
    public function DetailCourseView(){
        //Nhận id từ route 
        return view('courseView.DetailCoursesView');
    }

    //My Learning View
    public function MyLearningView(){
        //Nhận filter - sort - search từ route
        //Call db và trả dữ liệu ở đây
        //Lấy id người dùng hiện tại để lọc
        return view('courseView.MyLearningView');
    }

    //Resume Learning View
    public function ResumeLearningView(){
        //Nhận id từ route 
        return view('courseView.ResumeLearningView');
    }
}
