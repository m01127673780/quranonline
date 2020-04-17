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

class StudentStyle extends Controller
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
      return view ('style.student',[
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
 

public function store() {

    $data = $this->validate(request(),
        [
            'name'                => 'required',
            'email'               => 'required',
            'phone'               => 'required',
            'message'             => 'sometimes|nullable',
            'how_aboutus'         => 'sometimes|nullable',
            'location'            => 'required',
            'timezone'            => 'required',
            'date'                => 'required',
            'time'                => 'required',
            'st1_name'            => 'sometimes|nullable',
            'st1_Gender'          => 'sometimes|nullable',
            'st1_course'          => 'sometimes|nullable',
            'st1_age'             => 'sometimes|nullable',
            'st2_name'            => 'sometimes|nullable',
            'st2_Gender'          => 'sometimes|nullable',
            'st2_course'          => 'sometimes|nullable',
            'st2_age'             => 'sometimes|nullable',
            'st3_name'            => 'sometimes|nullable',
            'st3_Gender'          => 'sometimes|nullable',
            'st3_course'          => 'sometimes|nullable',
            'st3_age'             => 'sometimes|nullable',
            'st4_name'            => 'sometimes|nullable',
            'st4_Gender'          => 'sometimes|nullable',
            'st4_course'          => 'sometimes|nullable',
            'st4_age'             => 'sometimes|nullable',
            'st5_name'            => 'sometimes|nullable',
            'st5_Gender'          => 'sometimes|nullable',
            'st5_course'          => 'sometimes|nullable',
            'st5_age'             => 'sometimes|nullable',
            'icon' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,webp,svg,txt,pdf,JPG,PNG,GIF,WEBP,TIFF,PSD,RAW,BMP,HEIF,INDD,JPEG,SVG,AI,EPS,',













        ], [], [
            'name'                => trans('admin.name'),
            'email'               => trans('admin.email'),
            'phone'               => trans('admin.phone'),
            'message'             => trans('admin.message'),
            'how_aboutus'         => trans('admin.how_aboutus'),
            'location'            => trans('admin.location'),
            'timezone'            => trans('admin.timezone'),
            'date'                => trans('admin.date'),
            'time'                => trans('admin.time'),
            'st1_name'            => trans('admin.Gender'),
            'st1_Gender'          => trans('admin.time'),
            'st1_course'          => trans('admin.course'),
            'st1_age'             => trans('admin.age'),
            'st2_Gender'          => trans('admin.time'),
            'st2_course'          => trans('admin.course'),
            'st2_age'             => trans('admin.age'),
            'st2_name'            => trans('admin.Gender'),
            'st3_Gender'          => trans('admin.time'),
            'st3_course'          => trans('admin.course'),
            'st3_age'             => trans('admin.age'),
            'st3_name'            => trans('admin.Gender'),
            'st4_Gender'          => trans('admin.time'),
            'st4_course'          => trans('admin.course'),
            'st4_age'             => trans('admin.age'),
            'st4_name'            => trans('admin.Gender'),
            'st5_Gender'          => trans('admin.time'),
            'st5_course'          => trans('admin.course'),
            'st5_age'             => trans('admin.age'),
            'st5_name'            => trans('admin.Gender'),
            'icon'                => trans('admin.icon'),

        ]);

    if (request()->hasFile('icon')) {
        $imageName = time() . '.'.request()->icon->getClientOriginalExtension();
        $Name = request()->name;
        request()->icon->move(public_path('storage/teachersignup'), $imageName);
        request()->icon= request()->icon->getClientOriginalExtension();
        session()->forget('image');
        Student::create($data);
        return back()
            ->with('success', trans('admin.successfully_registered'))
            ->with('image', $imageName)
            ->with('name', $Name);
    }else{
        $imageName = '';
    }

    Student::create($data);

    $Name = request()->name;
    return back()
        ->with('success', trans('admin.successfully_registered'))
        ->with('name', $Name);
}
}