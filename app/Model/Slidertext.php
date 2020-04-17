<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slidertext extends Model{
 

	protected $table    = 'slidertext';
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