<?php

namespace App\Http\Controllers;
use App\Model\Whyus;


use App\Model\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesStyle extends Controller
{
    public function test ()
    {


// $var = Courses::all();

// echo $var;
   $courses =Courses::all();
     // return view ('style.index',['courses' => $courses]);
 
    }
}


 
class WhyusStyle extends Controller
{
    public function test ()
    {


// $var = Courses::all();

// echo $var;
   $whyus =Whyus::all();
     return view ('style.index',['whyus' => $whyus]);
 
    }
}
