<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeacherSignup extends Model{
 

	protected $table    = 'teachersignup';
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
       'icon',
	];

}