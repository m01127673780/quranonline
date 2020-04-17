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
class IndexStudentStyleAR extends Controller
{
    public function show (){
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
       return view ('style.indexstudentAR',[
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
  public function insert_contact (){
      $add                = new Contact;
      $add->name          = request('name');
      $add->email         = request('email');
      $add->subject       = request('subject');
      $add->phone         = request('phone');
      $add->message       = request('message');
      $add->icon          = request('icon'.v_image());
      $add->save();
      return back();
      if (request()->hasFile('icon')) {
          $data['icon'] = up()->upload([
      'file'              => 'icon',
      'path'              => 'contact',
      'upload_type'       => 'single',
      'delete_file'       => '',
            ]);
           }
        }

     public function insert_quick (){
      $add                = new Quick;
      $add->name          = request('name');
      $add->email         = request('email');
      $add->subject       = request('subject');
      $add->phone         = request('phone');
      $add->message       = request('message');
      $add->icon          = request('icon'.v_image());
      $add->save();
      return back();


      if (request()->hasFile('icon')) {
      $data['icon'] = up()->upload([
      'file'        => 'icon',
      'path'        => 'contact',
      'upload_type' => 'single',
      'delete_file' => '',
            ]);
         }
       }
}
 