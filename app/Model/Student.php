<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{
 

	protected $table    = 'student';
	protected $fillable = [
        'name',         
       'email',         
       'phone',         
       'message',         
       'how_aboutus',
       'location',
       'timezone',
       'date',
       'time',
       'st1_name',
       'st1_Gender',
       'st1_course',
       'st1_age',
       'st2_name',
       'st2_Gender',
       'st2_course',
       'st2_age',
       'st3_name',
       'st3_Gender',
       'st3_course',
       'st3_age',
       'st4_name',
       'st4_Gender',
       'st4_course',
       'st4_age',
       'st5_name',
       'st5_Gender',
       'st5_course',
       'st5_age',
       'icon',
	];

}