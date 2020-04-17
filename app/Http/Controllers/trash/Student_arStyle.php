<?php

namespace App\Http\Controllers;


use App\Model\Whyus;
use App\Model\Courses;
use App\Model\Videos;
use App\Model\Teachers;
 use App\Model\Testimonial;
use App\Model\BestStudent;
use App\Model\Halfhour;
use App\Model\Hour;
use App\Model\Footer;
use App\Model\Slider;
use App\Model\News;
use App\Model\Contact;
use App\Model\Student;
 use App\Model\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Student_arStyle extends Controller
{
    public function show (){

    

// $var = Courses::all();

// echo $var;
           $setting         =Setting::all();

	   $whyus =Whyus::all();
	   $courses =Courses::all();
	   $videos =Videos::all();
	   $teachers =Teachers::all();
      $beststudent =BestStudent::all();
     $testimonial =Testimonial::all();
     $halfhour =Halfhour::all();
     $hour     =Hour::all();
     $footer     =Footer::all();
     $Slider     =Slider::all();
      return view ('style.student_ar',[
      	'whyus' => $whyus,
      	'courses'=>$courses,
      	'videos'=>$videos,
      	'teachers'=>$teachers,
         'beststudent'=>$beststudent,
        'testimonial'=>$testimonial,
        'hour'=>$hour,
        'halfhour'=>$halfhour,
        'footer'=>$footer,
        'Slider'=>$Slider,
        'setting' => $setting,

      ]);
 
    }
 

    public function insert_student (){
      $add = new Student;
      $add->name              = request('name');
      $add->email             = request('email');
      $add->phone             = request('phone');
      $add->how_aboutus       = request('how_aboutus');
      $add->location          = request('location');
      $add->timezone          = request('timezone');
      $add->date              = request('date');
      $add->time              = request('time');
      $add->st1_name          = request('st1_name');
      $add->st1_Gender        = request('st1_Gender');
      $add->st1_course        = request('st1_course');
      $add->st1_age           = request('st1_age');
      $add->st2_name          = request('st2_name');
      $add->st2_Gender        = request('st2_Gender');
      $add->st2_course        = request('st2_course');
      $add->st2_age           = request('st2_age');
      $add->st3_name          = request('st3_name');
      $add->st3_Gender        = request('st3_Gender');
      $add->st3_course        = request('st3_course');
      $add->st3_age           = request('st3_age');
      $add->st4_name          = request('st4_name');
      $add->st4_Gender        = request('st4_Gender');
      $add->st4_course        = request('st4_course');
      $add->st4_age           = request('st4_age');
      $add->st5_name          = request('st5_name');
      $add->st5_Gender        = request('st5_Gender');
      $add->st5_course        = request('st5_course');
      $add->st5_age           = request('st5_age');
      $add->message           = request('message');
      $add->icon              = request('icon'.v_image());
 
        $add->save();
      return back();


 
}
}
 