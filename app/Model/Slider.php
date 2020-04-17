<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model{
 

	protected $table    = 'slider';
	protected $fillable = [
	      'link',
           'img',
           'head_en',
           'head_ar',
           'title_en',
           'title_ar',
           'text1_ar',
           'text1_en',
           'text2_ar',
           'text2_en',
           'text3_ar',
           'text3_en',
	];

}