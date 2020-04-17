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
      use App\File;

 use App\Http\Controllers\Controller;



use App\Model\TeacherSignup;
use Illuminate\Http\Request;
use Storage;


class TeacherSignupStyle extends Controller
{
    public function show()
    {


// $var = Courses::all();

// echo $var;
        $whyus = Whyus::all();
        $courses = Courses::all();
        $videos = Videos::all();
        $teachers = Teachers::all();
        $beststudent = BestStudent::all();
        $testimonial = Testimonial::all();
        $halfhour = Halfhour::all();
        $hour = Hour::all();
        $footer = Footer::all();
        $Slider = Slider::all();
        $setting = Setting::all();

        return view('style.teachersignup', [
            'setting' => $setting,
            'whyus' => $whyus,
            'courses' => $courses,
            'videos' => $videos,
            'teachers' => $teachers,
            'beststudent' => $beststudent,
            'testimonial' => $testimonial,
            'hour' => $hour,
            'halfhour' => $halfhour,
            'footer' => $footer,
            'Slider' => $Slider,
        ]);

    }


    public function store()
    {

        $data = $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'sometimes|nullable',
                'message' => 'sometimes|nullable',
                'how_aboutus' => 'sometimes|nullable',
                'location' => 'required',
                'timezone' => 'required',
                'date' => 'sometimes|nullable',
                'time' => 'sometimes|nullable',
                'icon' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,txt,pdf',

            ], [], [
                'name' => trans('admin.name'),
                'email' => trans('admin.email'),
                'phone' => trans('admin.phone'),
                'message' => trans('admin.message'),
                'how_aboutus' => trans('admin.how_aboutus'),
                'location' => trans('admin.location'),
                'timezone' => trans('admin.timezone'),
                'date' => trans('admin.date'),
                'time' => trans('admin.time'),
                'icon' => trans('admin.icon'),

            ]);

        if (request()->hasFile('icon')) {
            $imageName = time() . '.'.request()->icon->getClientOriginalExtension();
            $Name = request()->name;
            request()->icon->move(public_path('storage/teachersignup'), $imageName);
            request()->icon= request()->icon->getClientOriginalExtension();
            session()->forget('image');
            TeacherSignup::create($data);
            return back()
                ->with('success',trans('admin.successfully_registered'))
                ->with('image', $imageName)
                ->with('name', $Name);
        }else{
            $imageName = '';
        }



        TeacherSignup::create($data);
        $Name = request()->name;

        return back()
            ->with('success', trans('admin.successfully_registered'))
            ->with('name', $Name);



    }
//    -------------------------------------------------------------------


}