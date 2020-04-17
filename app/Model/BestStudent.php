<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BestStudent extends Model{
 

      protected $table    = 'beststudent';
      protected $fillable = [
                  'name_ar',
                  'name_en',
                  'name_Teacher_ar',
                  'name_Teacher_en',
                  'date_ar',
                  'date_en',
                  'Lecture_ar',
                  'Lecture_en',
                  'job_ar',
                  'job_en',
                  'text_ar',
                  'text_en',
                  'img',
                  'img_Teacher',
 
   
      ];

}
