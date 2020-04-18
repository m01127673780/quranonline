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
    use App\Model\Slidertext;
    use App\Model\News;
    use App\Model\Contact;
    use App\Model\Student;
    use App\Model\Stat;
    use App\Model\Quick;
    use App\Model\Setting;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    class IndexStudentStyle extends Controller
    {
    public function show (){
     $setting            =Setting::all();
     $whyus              =Whyus::orderBy('id','DESC')->paginate(8);
     $courses            =Courses::orderBy('created_at','ASC')->paginate(8);
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $halfhour           =Halfhour::orderBy('created_at','ASC')->paginate(8);
     $hour               =Hour::orderBy('created_at','ASC')->paginate(8);
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
      $stat               =Stat::orderBy('created_at','ASC')->paginate(6);
       return view ('style.indexstudent',[
      'setting'          => $setting,
      'whyus'            => $whyus,
      'courses'          =>$courses,
      'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }
        public function login_student (){
     $setting            =Setting::all();
     $whyus              =Whyus::all();
     $courses            =Courses::all();
     $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $halfhour           =Halfhour::all();
     $hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::all();
       return view ('style.login_student',[
      'setting'          => $setting,
      'whyus'            => $whyus,
      'courses'          =>$courses,
      'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }
    
    
    
    
        public function login_teacher (){
     $setting            =Setting::all();
     $whyus              =Whyus::all();
     $courses            =Courses::all();
     $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $halfhour           =Halfhour::all();
     $hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::all();
       return view ('style.login_teacher',[
      'setting'          => $setting,
      'whyus'            => $whyus,
      'courses'          =>$courses,
      'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }

    
    
        public function all_courses (){
 
     $all_courses            =Courses::orderBy('created_at','ASC')->paginate(16);
     $setting            =Setting::all();
     $whyus              =Whyus::all();
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $halfhour           =Halfhour::all();
     $hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::all();
       return view ('style.all_courses',[
       
      'all_courses'          =>$all_courses,
            'setting'          => $setting,
      'whyus'            => $whyus,
       'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }

    
    
        public function all_statistics (){
 
     $all_courses            =Courses::orderBy('created_at','ASC')->paginate(35);
     $all_statistics            =Stat::orderBy('created_at','ASC')->paginate(18);
      $setting            =Setting::all();
     $whyus              =Whyus::all();
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $halfhour           =Halfhour::all();
     $hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::orderBy('created_at','ASC')->paginate(24);
       return view ('style.all_statistics',[
       
      'all_courses'          =>$all_courses,
      'all_statistics'          =>$all_statistics,
            'setting'          => $setting,
      'whyus'            => $whyus,
       'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }

    
    
        public function all_prices (){
 
     $all_courses            =Courses::orderBy('created_at','ASC')->paginate(35);
     $all_statistics            =Stat::all();
      $setting            =Setting::all();
     $whyus              =Whyus::all();
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $all_halfhour           =Halfhour::all();
     $all_hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::orderBy('created_at','ASC')->paginate(4);
       return view ('style.all_prices',[
       
      'all_courses'          =>$all_courses,
      'all_statistics'          =>$all_statistics,
            'setting'          => $setting,
      'whyus'            => $whyus,
       'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'all_hour'             =>$all_hour,
      'all_halfhour'         =>$all_halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }
    
    
        public function all_whyus (){
 
     $all_courses            =Courses::orderBy('created_at','ASC')->paginate(35);
     $all_statistics            =Stat::all();
      $setting            =Setting::all();
     $whyus              =Whyus::orderBy('created_at','ASC')->paginate(20);
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $all_halfhour           =Halfhour::all();
     $all_hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::orderBy('created_at','ASC')->paginate(4);
       return view ('style.all_whyus',[
       
      'all_courses'          =>$all_courses,
      'all_statistics'          =>$all_statistics,
            'setting'          => $setting,
      'whyus'            => $whyus,
       'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'all_hour'             =>$all_hour,
      'all_halfhour'         =>$all_halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
       ]);
    }


// -----------  start show 
    public function show_course (Courses $coursesfind, $id)
    {
         $coursesfind            = Courses::find($id);
          $all_courses            =Courses::orderBy('created_at','ASC')->paginate(35);
     $setting            =Setting::all();
     $whyus              =Whyus::all();
      $videos             =Videos::all();
     $teachers           =Teachers::all();
      $beststudent       =BestStudent::all();
     $testimonial        =Testimonial::all();
     $last_testimonial   = Testimonial::orderBy('created_at','DESC')->paginate(5);
     $first_testimonial   = Testimonial::orderBy('created_at','ASC')->paginate(5);
     $halfhour           =Halfhour::all();
     $hour               =Hour::all();
     $footer             =Footer::all();
     $Slider             =Slider::all();
     $Slidertext         =Slidertext::all();
     $stat               =Stat::all();
        return view('style.show_course',[
            'coursesfind'=>$coursesfind,
                  'all_courses'          =>$all_courses,
            'setting'          => $setting,
      'whyus'            => $whyus,
       'videos'           =>$videos,
      'teachers'         =>$teachers,
      'beststudent'      =>$beststudent,
      'testimonial'             =>$testimonial,
      'last_testimonial'        =>$last_testimonial,
      'first_testimonial'       =>$first_testimonial,
      'testimonial'      =>$testimonial,
      'hour'             =>$hour,
      'halfhour'         =>$halfhour,
      'footer'           =>$footer,
      'Slider'           =>$Slider,
      'Slidertext'       =>$Slidertext,
      'stat'             =>$stat,
// ---------------
        ]);
     
    }

// ----------- End start show

 
//------------------------------------------------------------------------
        public function insert_contact()
        {

            $data = $this->validate(request(),
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'sometimes|nullable',
                    'message' => 'sometimes|nullable',
                    'subject' => 'sometimes|nullable',
                    'icon' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,txt,pdf',

                ], [], [
                    'name' => trans('admin.name'),
                    'email' => trans('admin.email'),
                    'phone' => trans('admin.phone'),
                    'message' => trans('admin.message'),
                    'subject' => trans('admin.subject'),
                    'icon' => trans('admin.icon'),

                ]);

            if (request()->hasFile('icon')) {
                $imageName = time() . '.'.request()->icon->getClientOriginalExtension();
                $Name = request()->name;
                request()->icon->move(public_path('storage/contact'), $imageName);
                request()->icon= request()->icon->getClientOriginalExtension();
                session()->forget('image');
                Contact::create($data);
                return back()
                    ->with('success',trans('admin.successfully_registered'))
                    ->with('image', $imageName)
                    ->with('name', $Name);
            }else{
                $imageName = '';
            }


            Contact::create($data);
            $Name = request()->name;

            return back()
                ->with('success', trans('admin.successfully_registered'))
                ->with('name', $Name);



        }
//    -------------------------------------------------------------------

//------------------------------------------------------------------------

        public function insert_quick()
        {

            $data = $this->validate(request(),
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'message' => 'sometimes|nullable',
                    'subject' => 'sometimes|nullable',
                    'icon' => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,txt,pdf',

                ], [], [
                    'name' => trans('admin.name'),
                    'email' => trans('admin.email'),
                    'phone' => trans('admin.phone'),
                    'message' => trans('admin.message'),
                    'subject' => trans('admin.subject'),
                    'icon' => trans('admin.icon'),

                ]);

            if (request()->hasFile('icon')) {
                $imageName = time() . '.'.request()->icon->getClientOriginalExtension();
                $Name = request()->name;
                request()->icon->move(public_path('storage/quick'), $imageName);
                request()->icon= request()->icon->getClientOriginalExtension();
                session()->forget('image');
                Quick::create($data);
                return back()
                    ->with('success',trans('admin.successfully_registered'))
                    ->with('image', $imageName)
                    ->with('name', $Name);
            }else{
                $imageName = '';
            }


            Quick::create($data);
            $Name = request()->name;

            return back()
                ->with('success', trans('admin.successfully_registered'))
                ->with('name', $Name);



        }

        public function lang_front_ar()
        {
            session()->forget('lang');
            session()->put('lang','ar');
            return back();

        }

        public function lang_front_en()
        {
            session()->forget('lang');
            session()->put('lang','en');
            return back();
        }
    }
